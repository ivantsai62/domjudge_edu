<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Judging extends \App\Entity\Judging implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'judgingid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'cid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'submitid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'starttime', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'endtime', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'result', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'verified', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'jury_member', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'verify_comment', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'valid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'output_compile', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'output_compile_as_string', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'seen', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'rejudgingid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'prevjudgingid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'judgehost_name', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'contest', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'submission', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'judgehost', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'rejudging', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'original_judging', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'runs', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'task_result'];
        }

        return ['__isInitialized__', 'judgingid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'cid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'submitid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'starttime', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'endtime', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'result', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'verified', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'jury_member', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'verify_comment', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'valid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'output_compile', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'output_compile_as_string', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'seen', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'rejudgingid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'prevjudgingid', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'judgehost_name', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'contest', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'submission', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'judgehost', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'rejudging', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'original_judging', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'runs', '' . "\0" . 'App\\Entity\\Judging' . "\0" . 'task_result'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Judging $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getMaxRuntime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxRuntime', []);

        return parent::getMaxRuntime();
    }

    /**
     * {@inheritDoc}
     */
    public function getSumRuntime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSumRuntime', []);

        return parent::getSumRuntime();
    }

    /**
     * {@inheritDoc}
     */
    public function getJudgingid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getJudgingid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudgingid', []);

        return parent::getJudgingid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCid($cid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCid', [$cid]);

        return parent::setCid($cid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCid', []);

        return parent::getCid();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubmitid($submitid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubmitid', [$submitid]);

        return parent::setSubmitid($submitid);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmitid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmitid', []);

        return parent::getSubmitid();
    }

    /**
     * {@inheritDoc}
     */
    public function setStarttime($starttime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStarttime', [$starttime]);

        return parent::setStarttime($starttime);
    }

    /**
     * {@inheritDoc}
     */
    public function getStarttime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStarttime', []);

        return parent::getStarttime();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsoluteStartTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsoluteStartTime', []);

        return parent::getAbsoluteStartTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getRelativeStartTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelativeStartTime', []);

        return parent::getRelativeStartTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndtime($endtime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndtime', [$endtime]);

        return parent::setEndtime($endtime);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndtime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndtime', []);

        return parent::getEndtime();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsoluteEndTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsoluteEndTime', []);

        return parent::getAbsoluteEndTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getRelativeEndTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelativeEndTime', []);

        return parent::getRelativeEndTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setResult($result)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResult', [$result]);

        return parent::setResult($result);
    }

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResult', []);

        return parent::getResult();
    }

    /**
     * {@inheritDoc}
     */
    public function setVerified($verified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVerified', [$verified]);

        return parent::setVerified($verified);
    }

    /**
     * {@inheritDoc}
     */
    public function getVerified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVerified', []);

        return parent::getVerified();
    }

    /**
     * {@inheritDoc}
     */
    public function setJuryMember($juryMember)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJuryMember', [$juryMember]);

        return parent::setJuryMember($juryMember);
    }

    /**
     * {@inheritDoc}
     */
    public function getJuryMember()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJuryMember', []);

        return parent::getJuryMember();
    }

    /**
     * {@inheritDoc}
     */
    public function setVerifyComment($verifyComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVerifyComment', [$verifyComment]);

        return parent::setVerifyComment($verifyComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getVerifyComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVerifyComment', []);

        return parent::getVerifyComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setValid($valid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValid', [$valid]);

        return parent::setValid($valid);
    }

    /**
     * {@inheritDoc}
     */
    public function getValid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValid', []);

        return parent::getValid();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutputCompile($outputCompile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutputCompile', [$outputCompile]);

        return parent::setOutputCompile($outputCompile);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutputCompile(bool $asString = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutputCompile', [$asString]);

        return parent::getOutputCompile($asString);
    }

    /**
     * {@inheritDoc}
     */
    public function setSeen($seen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeen', [$seen]);

        return parent::setSeen($seen);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeen', []);

        return parent::getSeen();
    }

    /**
     * {@inheritDoc}
     */
    public function setRejudgingid($rejudgingid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRejudgingid', [$rejudgingid]);

        return parent::setRejudgingid($rejudgingid);
    }

    /**
     * {@inheritDoc}
     */
    public function getRejudgingid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRejudgingid', []);

        return parent::getRejudgingid();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrevjudgingid($prevjudgingid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrevjudgingid', [$prevjudgingid]);

        return parent::setPrevjudgingid($prevjudgingid);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrevjudgingid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrevjudgingid', []);

        return parent::getPrevjudgingid();
    }

    /**
     * {@inheritDoc}
     */
    public function setJudgehostName(string $judgehost_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJudgehostName', [$judgehost_name]);

        return parent::setJudgehostName($judgehost_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getJudgehostName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudgehostName', []);

        return parent::getJudgehostName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubmission(\App\Entity\Submission $submission = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubmission', [$submission]);

        return parent::setSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmission()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmission', []);

        return parent::getSubmission();
    }

    /**
     * {@inheritDoc}
     */
    public function setContest(\App\Entity\Contest $contest = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContest', [$contest]);

        return parent::setContest($contest);
    }

    /**
     * {@inheritDoc}
     */
    public function getContest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContest', []);

        return parent::getContest();
    }

    /**
     * {@inheritDoc}
     */
    public function setRejudging(\App\Entity\Rejudging $rejudging = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRejudging', [$rejudging]);

        return parent::setRejudging($rejudging);
    }

    /**
     * {@inheritDoc}
     */
    public function getRejudging()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRejudging', []);

        return parent::getRejudging();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalJudging(\App\Entity\Judging $originalJudging = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalJudging', [$originalJudging]);

        return parent::setOriginalJudging($originalJudging);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalJudging()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalJudging', []);

        return parent::getOriginalJudging();
    }

    /**
     * {@inheritDoc}
     */
    public function setJudgehost(\App\Entity\Judgehost $judgehost = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJudgehost', [$judgehost]);

        return parent::setJudgehost($judgehost);
    }

    /**
     * {@inheritDoc}
     */
    public function getJudgehost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudgehost', []);

        return parent::getJudgehost();
    }

    /**
     * {@inheritDoc}
     */
    public function addRun(\App\Entity\JudgingRun $run)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRun', [$run]);

        return parent::addRun($run);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRun(\App\Entity\JudgingRun $run)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRun', [$run]);

        return parent::removeRun($run);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRuns', []);

        return parent::getRuns();
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalRelationships(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalRelationships', []);

        return parent::getExternalRelationships();
    }

    /**
     * {@inheritDoc}
     */
    public function isAborted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAborted', []);

        return parent::isAborted();
    }

    /**
     * {@inheritDoc}
     */
    public function isStillBusy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStillBusy', []);

        return parent::isStillBusy();
    }

    /**
     * {@inheritDoc}
     */
    public function getTask(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTask', []);

        return parent::getTask();
    }

    /**
     * {@inheritDoc}
     */
    public function setTask(?int $task): \App\Entity\Judging
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTask', [$task]);

        return parent::setTask($task);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaskResult()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaskResult', []);

        return parent::getTaskResult();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaskResult($task_result)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaskResult', [$task_result]);

        return parent::setTaskResult($task_result);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiIdField(\App\Service\EventLogService $eventLogService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiIdField', [$eventLogService]);

        return parent::getApiIdField($eventLogService);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiId(\App\Service\EventLogService $eventLogService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiId', [$eventLogService]);

        return parent::getApiId($eventLogService);
    }

}
