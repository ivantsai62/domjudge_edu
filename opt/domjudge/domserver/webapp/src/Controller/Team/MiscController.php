<?php declare(strict_types=1);

namespace App\Controller\Team;

use App\Controller\BaseController;
use App\Entity\Clarification;
use App\Entity\Language;
use App\Entity\Judging;
use App\Form\Type\PrintType;
use App\Service\DOMJudgeService;
use App\Service\ScoreboardService;
use App\Service\SubmissionService;
use App\Utils\Printing;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
//新增
use App\Entity\Problem;
use App\Entity\ContestProblem;
use App\Entity\Submission;
use App\Entity\JudgingRun;
use App\Entity\JudgingRunOutput;
use Symfony\Component\Form\FormFactoryInterface;
use App\Form\Type\SubmitProblemType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\Type\CompileType;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Class MiscController
 *
 * @Route("/team")
 * @IsGranted("ROLE_TEAM")
 * @Security("user.getTeam() !== null", message="You do not have a team associated with your account. ")
 *
 * @package App\Controller\Team
 */
class MiscController extends BaseController
{
    /**
     * @var DOMJudgeService
     */
    protected $dj;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var ScoreboardService
     */
    protected $scoreboardService;

    /**
     * @var SubmissionService
     */
    protected $submissionService;

    /**CCU
     * @var FormFactoryInterface
     */
    protected $formFactory;

    /**
     * MiscController constructor.
     * @param DOMJudgeService        $dj
     * @param EntityManagerInterface $em
     * @param ScoreboardService      $scoreboardService
     * @param SubmissionService      $submissionService
     */
    public function __construct(
        DOMJudgeService $dj,
        EntityManagerInterface $em,
        ScoreboardService $scoreboardService,
        SubmissionService $submissionService,
        FormFactoryInterface $formFactory
    ) {
        $this->dj                = $dj;
        $this->em                = $em;
        $this->scoreboardService = $scoreboardService;
        $this->submissionService = $submissionService;
        $this->formFactory       = $formFactory;
    }

    /**
     * @Route("", name="team_index")
     * @param Request $request
     * @return Response
     * @throws NoResultException
     * @throws NonUniqueResultException
     * @throws Exception
     */
    public function homeAction(Request $request)
    {
        $user    = $this->dj->getUser();
        $team    = $user->getTeam();
        $teamId  = $team->getTeamid();
        $contest = $this->dj->getCurrentContest($teamId);
        
        $data = [
            'team' => $team,
            'contest' => $contest,
            'refresh' => [
                'after' => 30,
                'url' => $this->generateUrl('team_index'),
                'ajax' => true,
            ],
            'maxWidth' => $this->dj->dbconfig_get('team_column_width', 0),
        ];
        if ($contest) {
            $scoreboard = $this->scoreboardService
                ->getTeamScoreboard($contest, $teamId, false);
            $data = array_merge(
                $data,
                $this->scoreboardService->getScoreboardTwigData(
                    $request, null, '', true, false, false,
                    $contest, $scoreboard
                )
            );
            $data['limitToTeams'] = [$team];
            $data['verificationRequired'] = $this->dj->dbconfig_get('verification_required', false);
            // We need to clear the entity manager, because loading the team scoreboard seems to break getting submission
            // contestproblems for the contest we get the scoreboard for
            $this->em->clear();
            $data['submissions'] = $this->submissionService->getSubmissionList(
                [$contest->getCid() => $contest],
                ['teamid' => $teamId],
                0
            )[0];
            /** @var Clarification[] $clarifications */
            $clarifications = $this->em->createQueryBuilder()
                ->from(Clarification::class, 'c')
                ->leftJoin('c.problem', 'p')
                ->leftJoin('c.sender', 's')
                ->leftJoin('c.recipient', 'r')
                ->select('c', 'p')
                ->andWhere('c.contest = :contest')
                ->andWhere('c.sender IS NULL')
                ->andWhere('c.recipient = :team OR c.recipient IS NULL')
                ->setParameter(':contest', $contest)
                ->setParameter(':team', $team)
                ->addOrderBy('c.submittime', 'DESC')
                ->addOrderBy('c.clarid', 'DESC')
                ->getQuery()
                ->getResult();

            /** @var Clarification[] $clarificationRequests */
            $clarificationRequests = $this->em->createQueryBuilder()
                ->from(Clarification::class, 'c')
                ->leftJoin('c.problem', 'p')
                ->leftJoin('c.sender', 's')
                ->leftJoin('c.recipient', 'r')
                ->select('c', 'p')
                ->andWhere('c.contest = :contest')
                ->andWhere('c.sender = :team')
                ->setParameter(':contest', $contest)
                ->setParameter(':team', $team)
                ->addOrderBy('c.submittime', 'DESC')
                ->addOrderBy('c.clarid', 'DESC')
                ->getQuery()
                ->getResult();

            $data['clarifications']        = $clarifications;
            $data['clarificationRequests'] = $clarificationRequests;
            $data['categories']            = $this->dj->dbconfig_get('clar_categories');
            
        }
        if ($request->isXmlHttpRequest()) {
            $data['ajax'] = true;
            return $this->render('team/partials/index_content.html.twig', $data);
        }

        return $this->render('team/index.html.twig', $data);
    }

    /**
     * @Route("/change-contest/{contestId<-?\d+>}", name="team_change_contest")
     * @param Request         $request
     * @param RouterInterface $router
     * @param int             $contestId
     * @return Response
     */
    public function changeContestAction(Request $request, RouterInterface $router, int $contestId)
    {
        if ($this->isLocalReferrer($router, $request)) {
            $response = new RedirectResponse($request->headers->get('referer'));
        } else {
            $response = $this->redirectToRoute('public_index');
        }
        return $this->dj->setCookie('domjudge_cid', (string)$contestId, 0, null, '', false, false,
                                                 $response);
    }

    /**
     * @Route("/print", name="team_print")
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function printAction(Request $request)
    {
        if (!$this->dj->dbconfig_get('print_command', '')) {
            throw new AccessDeniedHttpException("Printing disabled in config");
        }

        $form = $this->createForm(PrintType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            /** @var UploadedFile $file */
            $file             = $data['code'];
            $realfile         = $file->getRealPath();
            $originalfilename = $file->getClientOriginalName() ?? '';

            $langid   = $data['langid'];
            $username = $this->getUser()->getUsername();

            $team = $this->dj->getUser()->getTeam();
            $ret  = $this->dj->printFile($realfile, $originalfilename, $langid,
                $username, $team->getName(), $team->getTeamid(), $team->getRoom());

            return $this->render('team/print_result.html.twig', [
                'success' => $ret[0],
                'output' => $ret[1],
            ]);
        }

        /** @var Language[] $languages */
        $languages = $this->em->createQueryBuilder()
            ->from(Language::class, 'l')
            ->select('l')
            ->andWhere('l.allowSubmit = 1')
            ->getQuery()
            ->getResult();

        return $this->render('team/print.html.twig', [
            'form' => $form->createView(),
            'languages' => $languages,
        ]);
    }
    //新增
    /**
     * @Route("/homepage", name="team_homepage")

     */

    public function indexAction(){
        $contest            = $this->dj->getCurrentContest(-1);
        $showLimits         = (bool)$this->dj->dbconfig_get('show_limits_on_team_page');
        $defaultMemoryLimit = (int)$this->dj->dbconfig_get('memory_limit', 0);
        $timeFactorDiffers  = false;
        if ($showLimits) {
            $timeFactorDiffers = $this->em->createQueryBuilder()
                    ->from(Language::class, 'l')
                    ->select('COUNT(l)')
                    ->andWhere('l.allowSubmit = true')
                    ->andWhere('l.timeFactor <> 1')
                    ->getQuery()
                    ->getSingleScalarResult() > 0;
        }

        $problems = [];
        if ($contest && $contest->getFreezeData()->started()) {
            $problems = $this->em->createQueryBuilder()
                ->from(ContestProblem::class, 'cp')
                ->join('cp.problem', 'p')
                ->leftJoin('p.testcases', 'tc')
                ->select('partial p.{probid,name,externalid,problemtext_type,timelimit,memlimit,restriction_languages,subtask}', 'cp', 'SUM(tc.sample) AS numsamples')
                ->andWhere('cp.contest = :contest')
                ->andWhere('cp.allowSubmit = 1')
                ->setParameter(':contest', $contest)
                ->addOrderBy('cp.shortname')
                ->groupBy('cp.problem')
                ->getQuery()
                ->getResult();
        }

       

        return $this->render('team/homepage.html.twig', [
            'problems' => $problems,
            'showLimits' => $showLimits,
            'defaultMemoryLimit' => $defaultMemoryLimit,
            'timeFactorDiffers' => $timeFactorDiffers,
            'contest' => $contest,
        ]);
     }

    /*-----CCU-----*/
    /**
     * @Route("/compile", name="team_compile")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
     public function compileAction(Request $request){
        $user    = $this->dj->getUser();
        $team    = $user->getTeam();
        $team1 = $team ;
        $teamId  = $team->getTeamid();
        $contest = $this->dj->getCurrentContest($teamId);
        $problem       = $this->em->getRepository(Problem::class)->findAll();
        $formData    = [];
        $formData['problem'] = $problem;
        $form    = $this->formFactory
            ->createBuilder(CompileType::class)
            ->setAction('')->setData($formData)
            ->getForm();
        $form->handleRequest($request);
        $data = [
            'team' => $team,
            'contest' => $contest,
            'refresh' => [
                'after' => 30,
                'url' => $this->generateUrl('team_index'),
                'ajax' => true,
            ],
            'maxWidth' => $this->dj->dbconfig_get('team_column_width', 0),
            'form' => $form->createView()
        ];
        //find history data
        $submit_history = $this->em->createQueryBuilder()
        ->from(Submission::class, 's')
        ->select('s')
        ->andWhere('s.submit_type != :submit_type')
        ->andWhere('s.teamid = :teamid')
        ->setParameter(':submit_type', 0)
        ->setParameter(':teamid', $teamId)
        ->addOrderBy('s.submitid ','DESC')
        ->setMaxResults(30)
        ->getQuery()
        ->getResult();
        $historys = array();
        $times = array();
        //save history name = problem_name + time , and value = sourcecode
        foreach ($submit_history as $history)
        {
            $files = $history->getFiles();
            $name = $history->getProblem()->getName();
            $sourcecode = $files[0]->getSourcecode();
            $date = date("Y-m-d H:i:s", (int)$history->getSubmitTime());
            $historys[$name." ".$date] = $sourcecode;
        }
        $data['historys'] = $historys;

        // if use ajax to post data, then check the code is not null 
        if ($request->isXmlHttpRequest()) {
            if($request->request->get('code') != null)
            {if ($contest === null) {
                $this->addFlash('danger', 'No active contest');
            } elseif (!$this->dj->checkrole('jury') && !$contest->getFreezeData()->started()) {
                $this->addFlash('danger', 'Contest has not yet started');
            } else {
                $code = str_replace("\n","\r\n",$request->request->get('code'));
                $probid = $request->request->get('problem');
                $stdin = $request->request->get('stdin');
                $compile_run = $request->request->get('compile_run');
                $problem = $this->em->createQueryBuilder()
                ->from(Problem::class, 'p')
                ->select('p')
                ->andWhere('p.probid = :probid')
                ->setParameter(':probid', $probid)
                ->getQuery()
                ->getResult();

                $language = $request->request->get('language');
                $entryPoint = $form->get('entry_point')->getData() ?: null;
                $files = [];
                $team    = $user->getTeam();
                
                $compile_submit = [];
                $compile_submit['stdin'] = $stdin;
                $compile_submit['code'] = $code;
                $compile_submit['name'] = 'main.'.$language;
                $compile_submit['compile_run'] = $compile_run;
                $submission = $this->submissionService->submitSolution(
                    $team, $probid, $contest, $language, $files,
                    null, $entryPoint, null, null, $message, $compile_submit
                );
                //if submission success,return submission id 
                if ($submission) {
                    $this->dj->auditlog('submission', $submission->getSubmitid(), 'added',
                                        'via teampage', null, $contest->getCid());
                    $this->addFlash(
                        'success',
                        '<strong>Submission done!</strong> Watch for the verdict in the list below.'
                    );
                    
                    $submitid = $submission->getSubmitid();
                    $jsonData[1] = $submitid;
                    return new JsonResponse($jsonData); 
                
                } else {
                    $this->addFlash('danger', $message);
                }
                
            }
            }
            return $this->render('team/compile.html.twig', $data);
            
        } else {
            
            return $this->render('team/compile.html.twig', $data);
        }
     }
    /**
     * @Route("/compile_api", name="team_compile_api")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    //use submitid to find the output
    public function compileAction1(Request $request){
        $submitid = $request->request->get('submitid');
        $judging = $this->em->createQueryBuilder()
        ->from(Judging::class, 'jud')
        ->select('jud')
        ->andWhere('jud.submitid = :id')
        ->setParameter(':id', $submitid)
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();
        if($judging)
        {
        $judging_run = $this->em->createQueryBuilder()
        ->from(JudgingRun::class, 'run')
        ->select('run')
        ->andWhere('run.judgingid = :id')
        ->setParameter(':id', $judging->getJudgingid())
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();
        }
        else
        {
            return 0 ;
        }
        if($judging_run)
        {
        $run_output = $this->em->createQueryBuilder()
        ->from(JudgingRunOutput::class, 'out')
        ->select('out')
        ->andWhere('out.run = :id')
        ->setParameter(':id', $judging_run->getRunid())
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();
        }
        else
        {
            return 0 ;
        }
    $jsonData[1] = $run_output->getOutputRun();
    return new JsonResponse($jsonData); 
    }
}
/*-----CCU-----*/