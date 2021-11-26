<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v4/contests' => [
            [['_route' => 'app_api_contest_addcontest', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_contest_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::listAction'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v4/version' => [[['_route' => 'app_api_generalinfo_getversion', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/info' => [[['_route' => 'app_api_generalinfo_getinfo', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4' => [[['_route' => 'api_root', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/status' => [[['_route' => 'app_api_generalinfo_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/user' => [[['_route' => 'app_api_generalinfo_getuser', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config' => [[['_route' => 'app_api_generalinfo_getdatabaseconfiguration', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config/check' => [[['_route' => 'app_api_generalinfo_getconfigcheck', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/judgehosts' => [
            [['_route' => 'app_api_judgehost_getjudgehosts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_judgehost_createjudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v4/users/groups' => [[['_route' => 'app_api_user_addgroup', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addGroupAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/teams' => [[['_route' => 'app_api_user_addteams', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/accounts' => [[['_route' => 'app_api_user_addaccounts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users' => [[['_route' => 'app_api_user_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/analysis' => [[['_route' => 'analysis_index', '_controller' => 'App\\Controller\\Jury\\AnalysisController::indexAction'], null, null, null, false, false, null]],
        '/jury/auditlog' => [[['_route' => 'jury_auditlog', '_controller' => 'App\\Controller\\Jury\\AuditLogController::indexAction'], null, null, null, false, false, null]],
        '/jury/balloons' => [[['_route' => 'jury_balloons', '_controller' => 'App\\Controller\\Jury\\BalloonController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications' => [[['_route' => 'jury_clarifications', '_controller' => 'App\\Controller\\Jury\\ClarificationController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications/send' => [
            [['_route' => 'jury_clarification_new', '_controller' => 'App\\Controller\\Jury\\ClarificationController::composeClarificationAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'jury_clarification_send', '_controller' => 'App\\Controller\\Jury\\ClarificationController::sendAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/jury/config' => [[['_route' => 'jury_config', '_controller' => 'App\\Controller\\Jury\\ConfigController::indexAction'], null, null, null, false, false, null]],
        '/jury/config/check' => [[['_route' => 'jury_config_check', '_controller' => 'App\\Controller\\Jury\\ConfigController::checkAction'], null, null, null, false, false, null]],
        '/jury/config/check/phpinfo' => [[['_route' => 'jury_config_phpinfo', '_controller' => 'App\\Controller\\Jury\\ConfigController::phpinfoAction'], null, null, null, false, false, null]],
        '/jury/contests' => [[['_route' => 'jury_contests', '_controller' => 'App\\Controller\\Jury\\ContestController::indexAction'], null, null, null, false, false, null]],
        '/jury/contests/add' => [[['_route' => 'jury_contest_add', '_controller' => 'App\\Controller\\Jury\\ContestController::addAction'], null, null, null, false, false, null]],
        '/jury/executables' => [[['_route' => 'jury_executables', '_controller' => 'App\\Controller\\Jury\\ExecutableController::indexAction'], null, null, null, false, false, null]],
        '/jury/import-export' => [[['_route' => 'jury_import_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::indexAction'], null, null, null, false, false, null]],
        '/jury/import-export/contest-yaml' => [[['_route' => 'jury_import_export_yaml', '_controller' => 'App\\Controller\\Jury\\ImportExportController::contestYamlAction'], null, null, null, false, false, null]],
        '/jury/internal-errors' => [[['_route' => 'jury_internal_errors', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts' => [[['_route' => 'jury_judgehosts', '_controller' => 'App\\Controller\\Jury\\JudgehostController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/add/multiple' => [[['_route' => 'jury_judgehost_add', '_controller' => 'App\\Controller\\Jury\\JudgehostController::addMultipleAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/edit/multiple' => [[['_route' => 'jury_judgehost_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostController::editMultipleAction'], null, null, null, false, false, null]],
        '/jury/judgehost-restrictions' => [[['_route' => 'jury_judgehost_restrictions', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehost-restrictions/add' => [[['_route' => 'jury_judgehost_restriction_add', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::addAction'], null, null, null, false, false, null]],
        '/jury' => [[['_route' => 'jury_index', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::indexAction'], null, null, null, false, false, null]],
        '/jury/updates' => [[['_route' => 'jury_ajax_updates', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::updatesAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/refresh-cache' => [[['_route' => 'jury_refresh_cache', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::refreshCacheAction'], null, null, null, false, false, null]],
        '/jury/judging-verifier' => [[['_route' => 'jury_judging_verifier', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::judgingVerifierAction'], null, null, null, false, false, null]],
        '/jury/languages' => [[['_route' => 'jury_languages', '_controller' => 'App\\Controller\\Jury\\LanguageController::indexAction'], null, null, null, false, false, null]],
        '/jury/languages/add' => [[['_route' => 'jury_language_add', '_controller' => 'App\\Controller\\Jury\\LanguageController::addAction'], null, null, null, false, false, null]],
        '/jury/print' => [[['_route' => 'jury_print', '_controller' => 'App\\Controller\\Jury\\PrintController::showAction'], null, null, null, false, false, null]],
        '/jury/problems' => [[['_route' => 'jury_problems', '_controller' => 'App\\Controller\\Jury\\ProblemController::indexAction'], null, null, null, false, false, null]],
        '/jury/problems/add' => [[['_route' => 'jury_problem_add', '_controller' => 'App\\Controller\\Jury\\ProblemController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings' => [[['_route' => 'jury_rejudgings', '_controller' => 'App\\Controller\\Jury\\RejudgingController::indexAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/add' => [[['_route' => 'jury_rejudging_add', '_controller' => 'App\\Controller\\Jury\\RejudgingController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/create' => [[['_route' => 'jury_create_rejudge', '_controller' => 'App\\Controller\\Jury\\RejudgingController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/jury/scoreboard' => [[['_route' => 'jury_scoreboard', '_controller' => 'App\\Controller\\Jury\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/jury/shadow-differences' => [[['_route' => 'jury_shadow_differences', '_controller' => 'App\\Controller\\Jury\\ShadowDifferencesController::indexAction'], null, null, null, false, false, null]],
        '/jury/submissions' => [[['_route' => 'jury_submissions', '_controller' => 'App\\Controller\\Jury\\SubmissionController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations' => [[['_route' => 'jury_team_affiliations', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations/add' => [[['_route' => 'jury_team_affiliation_add', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::addAction'], null, null, null, false, false, null]],
        '/jury/categories' => [[['_route' => 'jury_team_categories', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::indexAction'], null, null, null, false, false, null]],
        '/jury/categories/add' => [[['_route' => 'jury_team_category_add', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::addAction'], null, null, null, false, false, null]],
        '/jury/teams' => [[['_route' => 'jury_teams', '_controller' => 'App\\Controller\\Jury\\TeamController::indexAction'], null, null, null, false, false, null]],
        '/jury/teams/add' => [[['_route' => 'jury_team_add', '_controller' => 'App\\Controller\\Jury\\TeamController::addAction'], null, null, null, false, false, null]],
        '/jury/users' => [[['_route' => 'jury_users', '_controller' => 'App\\Controller\\Jury\\UserController::indexAction'], null, null, null, false, false, null]],
        '/jury/users/add' => [[['_route' => 'jury_user_add', '_controller' => 'App\\Controller\\Jury\\UserController::addAction'], null, null, null, false, false, null]],
        '/jury/users/generate-passwords' => [[['_route' => 'jury_generate_passwords', '_controller' => 'App\\Controller\\Jury\\UserController::generatePasswordsAction'], null, null, null, false, false, null]],
        '/public' => [[['_route' => 'public_index', '_controller' => 'App\\Controller\\PublicController::scoreboardAction'], null, null, null, false, false, null]],
        '/public/problems' => [[['_route' => 'public_problems', '_controller' => 'App\\Controller\\PublicController::problemsAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::redirectAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::registerAction'], null, null, null, false, false, null]],
        '/team/clarifications/add' => [[['_route' => 'team_clarification_add', '_controller' => 'App\\Controller\\Team\\ClarificationController::addAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\Team\\MiscController::homeAction'], null, null, null, false, false, null]],
        '/team/print' => [[['_route' => 'team_print', '_controller' => 'App\\Controller\\Team\\MiscController::printAction'], null, null, null, false, false, null]],
        '/team/compile' => [[['_route' => 'team_compile', '_controller' => 'App\\Controller\\Team\\MiscController::compileAction'], null, null, null, false, false, null]],
        '/team/compile_api' => [[['_route' => 'team_compile_api', '_controller' => 'App\\Controller\\Team\\MiscController::compileAction1'], null, null, null, false, false, null]],
        '/team/problems' => [[['_route' => 'team_problems', '_controller' => 'App\\Controller\\Team\\ProblemController::problemsAction'], null, null, null, false, false, null]],
        '/team/scoreboard' => [[['_route' => 'team_scoreboard', '_controller' => 'App\\Controller\\Team\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/team/submit' => [[['_route' => 'team_submit', '_controller' => 'App\\Controller\\Team\\SubmissionController::createAction'], null, null, null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|v(?'
                            .'|4/(?'
                                .'|contests/([^/]++)(?'
                                    .'|/(?'
                                        .'|awards(?'
                                            .'|(*:60)'
                                            .'|/([^/]++)(*:76)'
                                        .')'
                                        .'|c(?'
                                            .'|larifications(?'
                                                .'|(*:104)'
                                                .'|/([^/]++)(*:121)'
                                            .')'
                                            .'|ontest\\-yaml(*:142)'
                                        .')'
                                        .'|s(?'
                                            .'|tat(?'
                                                .'|e(*:162)'
                                                .'|us(*:172)'
                                            .')'
                                            .'|coreboard(*:190)'
                                            .'|ubmissions(?'
                                                .'|(*:211)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:231)'
                                                    .'|/(?'
                                                        .'|files(*:248)'
                                                        .'|source\\-code(*:268)'
                                                    .')'
                                                .')'
                                                .'|(*:278)'
                                            .')'
                                        .')'
                                        .'|event\\-feed(*:299)'
                                        .'|groups(?'
                                            .'|(*:316)'
                                            .'|/([^/]++)(*:333)'
                                        .')'
                                        .'|judgement(?'
                                            .'|s(?'
                                                .'|(*:358)'
                                                .'|/([^/]++)(*:375)'
                                            .')'
                                            .'|\\-types(?'
                                                .'|(*:394)'
                                                .'|/([^/]++)(*:411)'
                                            .')'
                                        .')'
                                        .'|languages(?'
                                            .'|(*:433)'
                                            .'|/([^/]++)(*:450)'
                                        .')'
                                        .'|organizations(?'
                                            .'|(*:475)'
                                            .'|/([^/]++)(*:492)'
                                        .')'
                                        .'|problems(?'
                                            .'|(*:512)'
                                            .'|/([^/]++)(*:529)'
                                        .')'
                                        .'|runs(?'
                                            .'|(*:545)'
                                            .'|/([^/]++)(*:562)'
                                        .')'
                                        .'|teams(?'
                                            .'|(*:579)'
                                            .'|/([^/]++)(*:596)'
                                        .')'
                                    .')'
                                    .'|(*:606)'
                                .')'
                                .'|executables/([^/]++)(*:635)'
                                .'|judgehosts/(?'
                                    .'|([^/]++)(*:665)'
                                    .'|next\\-judging/([^/]++)(*:695)'
                                    .'|update\\-judging/([^/]++)/(\\d+)(*:733)'
                                    .'|add\\-judging\\-run/([^/]++)/(\\d+)(*:773)'
                                    .'|internal\\-error(*:796)'
                                .')'
                                .'|testcases/(?'
                                    .'|next\\-to\\-judge/([^/]++)(*:842)'
                                    .'|([^/]++)/file/([^/]++)/([^/]++)(*:881)'
                                .')'
                                .'|users/([^/]++)(*:904)'
                            .')'
                            .'|ersion(?:\\.(json|xml|html))?(*:941)'
                        .')'
                        .'|contests(?'
                            .'|/([^/]++)/(?'
                                .'|awards(?'
                                    .'|(?:\\.(json|xml|html))?(*:1005)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1047)'
                                .')'
                                .'|clarifications(?'
                                    .'|(?:\\.(json|xml|html))?(*:1096)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1138)'
                                .')'
                            .')'
                            .'|(?:\\.(json|xml|html))?(?'
                                .'|(*:1174)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(?'
                                    .'|(*:1223)'
                                .')'
                                .'|([^/]++)/(?'
                                    .'|contest\\-yaml(?:\\.(json|xml|html))?(*:1280)'
                                    .'|stat(?'
                                        .'|e(?:\\.(json|xml|html))?(*:1319)'
                                        .'|us(?:\\.(json|xml|html))?(*:1352)'
                                    .')'
                                    .'|event\\-feed(?:\\.(json|xml|html))?(*:1395)'
                                .')'
                            .')'
                        .')'
                        .'|executables/([^/\\.]++)(?:\\.(json|xml|html))?(*:1451)'
                        .'|info(?:\\.(json|xml|html))?(*:1486)'
                    .')'
                    .'|(?:\\.(json|xml|html))?(*:1518)'
                    .'|/(?'
                        .'|status(?:\\.(json|xml|html))?(*:1559)'
                        .'|user(?'
                            .'|(?:\\.(json|xml|html))?(*:1597)'
                            .'|s(?'
                                .'|/(?'
                                    .'|groups(?:\\.(json|xml|html))?(*:1642)'
                                    .'|teams(?:\\.(json|xml|html))?(*:1678)'
                                    .'|accounts(?:\\.(json|xml|html))?(*:1717)'
                                .')'
                                .'|(?:\\.(json|xml|html))?(*:1749)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1791)'
                            .')'
                        .')'
                        .'|con(?'
                            .'|fig(?'
                                .'|(?:\\.(json|xml|html))?(*:1836)'
                                .'|/check(?:\\.(json|xml|html))?(*:1873)'
                            .')'
                            .'|tests/([^/]++)/(?'
                                .'|groups(?'
                                    .'|(?:\\.(json|xml|html))?(*:1932)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1974)'
                                .')'
                                .'|judgement(?'
                                    .'|s(?'
                                        .'|(?:\\.(json|xml|html))?(*:2022)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2064)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(?:\\.(json|xml|html))?(*:2106)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2148)'
                                    .')'
                                .')'
                                .'|languages(?'
                                    .'|(?:\\.(json|xml|html))?(*:2193)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2235)'
                                .')'
                                .'|organizations(?'
                                    .'|(?:\\.(json|xml|html))?(*:2283)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2325)'
                                .')'
                                .'|problems(?'
                                    .'|(?:\\.(json|xml|html))?(?'
                                        .'|(*:2371)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2414)'
                                .')'
                                .'|runs(?'
                                    .'|(?:\\.(json|xml|html))?(*:2453)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2495)'
                                .')'
                                .'|s(?'
                                    .'|coreboard(?:\\.(json|xml|html))?(*:2540)'
                                    .'|ubmissions(?'
                                        .'|(?:\\.(json|xml|html))?(*:2584)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2626)'
                                        .'|(?:\\.(json|xml|html))?(*:2657)'
                                        .'|/([^/]++)/(?'
                                            .'|files(?:\\.(json|xml|html))?(*:2706)'
                                            .'|source\\-code(?:\\.(json|xml|html))?(*:2749)'
                                        .')'
                                    .')'
                                .')'
                                .'|teams(?'
                                    .'|(?:\\.(json|xml|html))?(*:2791)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2833)'
                                .')'
                            .')'
                        .')'
                        .'|judgehosts(?'
                            .'|(?:\\.(json|xml|html))?(*:2880)'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(*:2925)'
                                .'|update\\-judging/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:2986)'
                                .'|add\\-judging\\-run/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:3049)'
                                .'|internal\\-error(?:\\.(json|xml|html))?(*:3095)'
                            .')'
                            .'|(?:\\.(json|xml|html))?(*:3127)'
                            .'|/next\\-judging/([^/\\.]++)(?:\\.(json|xml|html))?(*:3183)'
                        .')'
                        .'|testcases/(?'
                            .'|next\\-to\\-judge/([^/\\.]++)(?:\\.(json|xml|html))?(*:3254)'
                            .'|([^/]++)/file/([^/]++)/([^/\\.]++)(?:\\.(json|xml|html))?(*:3318)'
                        .')'
                    .')'
                .')'
                .'|/jury/(?'
                    .'|a(?'
                        .'|nalysis/(?'
                            .'|team/([^/]++)(*:3367)'
                            .'|problem/([^/]++)(*:3392)'
                        .')'
                        .'|jax/([^/]++)(*:3414)'
                        .'|ffiliations/(?'
                            .'|(\\d+)(*:3443)'
                            .'|(\\d+)/edit(*:3462)'
                            .'|(\\d+)/delete(*:3483)'
                        .')'
                    .')'
                    .'|balloons/([^/]++)/done(*:3516)'
                    .'|c(?'
                        .'|larifications/(?'
                            .'|(\\d+)(*:3551)'
                            .'|(\\d+)/claim(*:3571)'
                            .'|(\\d+)/set\\-answered(*:3599)'
                            .'|(\\d+)/change\\-subject(*:3629)'
                            .'|(\\d+)/change\\-queue(*:3657)'
                        .')'
                        .'|ontests/(?'
                            .'|(\\d+)(*:3683)'
                            .'|(\\d+)/remove\\-interval/([^/]++)(*:3723)'
                            .'|(\\d+)/edit(*:3742)'
                            .'|(\\d+)/delete(*:3763)'
                            .'|(\\d+)/problems/(\\d+)/delete(*:3799)'
                            .'|(\\d+)/finalize(*:3822)'
                        .')'
                        .'|hange\\-contest/(-?\\d+)(*:3854)'
                        .'|ategories/(?'
                            .'|(\\d+)(*:3881)'
                            .'|(\\d+)/edit(*:3900)'
                            .'|(\\d+)/delete(*:3921)'
                        .')'
                    .')'
                    .'|executables/([^/]++)(?'
                        .'|(*:3955)'
                        .'|/(?'
                            .'|content(*:3975)'
                            .'|d(?'
                                .'|ownload(?'
                                    .'|(*:3998)'
                                    .'|/([^/]++)(*:4016)'
                                .')'
                                .'|elete(*:4031)'
                            .')'
                            .'|edit(?'
                                .'|(*:4048)'
                                .'|\\-files(*:4064)'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export/export/(?'
                            .'|(groups|teams|scoreboard|results)\\.tsv(*:4142)'
                            .'|(results|results-icpc|clarifications)\\.html(*:4194)'
                        .')'
                        .'|nternal\\-errors/(?'
                            .'|(\\d+)(*:4228)'
                            .'|(\\d+)/(ignore|resolve)(*:4259)'
                        .')'
                    .')'
                    .'|judgehost(?'
                        .'|s/(?'
                            .'|([^/]++)(?'
                                .'|(*:4298)'
                                .'|/(?'
                                    .'|de(?'
                                        .'|lete(*:4320)'
                                        .'|activate(*:4337)'
                                    .')'
                                    .'|activate(*:4355)'
                                .')'
                            .')'
                            .'|activate\\-all(*:4379)'
                            .'|deactivate\\-all(*:4403)'
                        .')'
                        .'|\\-restrictions/(?'
                            .'|(\\d+)(*:4436)'
                            .'|(\\d+)/edit(*:4455)'
                            .'|(\\d+)/delete(*:4476)'
                        .')'
                    .')'
                    .'|languages/([^/]++)(?'
                        .'|(*:4508)'
                        .'|/(?'
                            .'|toggle\\-(?'
                                .'|submit(*:4538)'
                                .'|judge(*:4552)'
                            .')'
                            .'|edit(*:4566)'
                            .'|delete(*:4581)'
                        .')'
                    .')'
                    .'|problems/(?'
                        .'|(\\d+)/export(*:4616)'
                        .'|(\\d+)(*:4630)'
                        .'|(\\d+)/text(*:4649)'
                        .'|(\\d+)/testcases(*:4673)'
                        .'|(\\d+)/testcases/(\\d+)/move/(up|down)(*:4718)'
                        .'|(\\d+)/testcases/(\\d+)/fetch/(input|output|image)(*:4775)'
                        .'|(\\d+)/edit(*:4794)'
                        .'|(\\d+)/delete(*:4815)'
                    .')'
                    .'|rejudgings/(?'
                        .'|(\\d+)(*:4844)'
                        .'|(\\d+)/(cancel|apply)(*:4873)'
                    .')'
                    .'|submissions/(?'
                        .'|(\\d+)(*:4903)'
                        .'|by\\-(?'
                            .'|judging\\-id/([^/]++)(*:4939)'
                            .'|external\\-id/([^/]++)(*:4969)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|runs/([^/]++)/([^/]++)/team\\-output(*:5026)'
                            .'|source(*:5041)'
                            .'|edit\\-source(*:5062)'
                        .')'
                        .'|(\\d+)/update\\-status(*:5092)'
                        .'|(\\d+)/verify(*:5113)'
                    .')'
                    .'|teams/(?'
                        .'|(\\d+)(*:5137)'
                        .'|(\\d+)/edit(*:5156)'
                        .'|(\\d+)/delete(*:5177)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:5201)'
                        .'|(\\d+)/edit(*:5220)'
                        .'|(\\d+)/delete(*:5241)'
                    .')'
                .')'
                .'|/public/(?'
                    .'|change\\-contest/(-?\\d+)(*:5286)'
                    .'|team/(\\d+)(*:5305)'
                    .'|problems/(\\d+)/text(*:5333)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5375)'
                    .'|(\\d+)/samples\\.zip(*:5402)'
                .')'
                .'|/team/(?'
                    .'|c(?'
                        .'|larifications/(\\d+)(*:5444)'
                        .'|hange\\-contest/(-?\\d+)(*:5475)'
                    .')'
                    .'|problems/(\\d+)/text(*:5504)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5546)'
                    .'|(\\d+)/samples\\.zip(*:5573)'
                    .'|problem_list/(\\d+)(*:5600)'
                    .'|team/(\\d+)(*:5619)'
                    .'|submission/(\\d+)(*:5644)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        60 => [[['_route' => 'app_api_awards_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        76 => [[['_route' => 'app_api_awards_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        104 => [[['_route' => 'app_api_clarification_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        121 => [[['_route' => 'app_api_clarification_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        142 => [[['_route' => 'app_api_contest_getcontestyaml', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        162 => [[['_route' => 'app_api_contest_getconteststate', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        172 => [[['_route' => 'app_api_contest_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        190 => [[['_route' => 'app_api_scoreboard_getscoreboard', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        211 => [[['_route' => 'app_api_submission_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        231 => [[['_route' => 'app_api_submission_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'submission_files', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        268 => [[['_route' => 'app_api_submission_getsubmissionsourcecode', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        278 => [[['_route' => 'app_api_submission_addsubmission', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction'], ['cid'], ['POST' => 0], null, false, false, null]],
        299 => [[['_route' => 'app_api_contest_geteventfeed', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        316 => [[['_route' => 'app_api_group_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        333 => [[['_route' => 'app_api_group_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        358 => [[['_route' => 'app_api_judgement_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        375 => [[['_route' => 'app_api_judgement_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_api_judgementtype_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        411 => [[['_route' => 'app_api_judgementtype_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_api_language_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        450 => [[['_route' => 'app_api_language_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        475 => [[['_route' => 'app_api_organization_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        492 => [[['_route' => 'app_api_organization_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        512 => [
            [['_route' => 'app_api_problem_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::listAction'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_problem_addproblem', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        529 => [[['_route' => 'app_api_problem_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        545 => [[['_route' => 'app_api_run_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        562 => [[['_route' => 'app_api_run_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        579 => [[['_route' => 'app_api_team_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        596 => [[['_route' => 'app_api_team_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        606 => [
            [['_route' => 'app_api_contest_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::singleAction'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_contest_changestarttime', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        635 => [[['_route' => 'app_api_executable_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        665 => [[['_route' => 'app_api_judgehost_updatejudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        695 => [[['_route' => 'app_api_judgehost_getnextjudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction'], ['hostname'], ['POST' => 0], null, false, true, null]],
        733 => [[['_route' => 'app_api_judgehost_updatejudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction'], ['hostname', 'judgingId'], ['PUT' => 0], null, false, true, null]],
        773 => [[['_route' => 'app_api_judgehost_addjudgingrun', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction'], ['hostname', 'judgingId'], ['POST' => 0], null, false, true, null]],
        796 => [[['_route' => 'app_api_judgehost_internalerror', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction'], [], ['POST' => 0], null, false, false, null]],
        842 => [[['_route' => 'app_api_testcase_getnexttojudge', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction'], ['id'], ['GET' => 0], null, false, true, null]],
        881 => [[['_route' => 'app_api_testcase_getfile', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction'], ['id', 'type', 'submitid'], ['GET' => 0], null, false, true, null]],
        904 => [[['_route' => 'app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        941 => [[['_route' => 'general_get_version', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1005 => [[['_route' => 'scoreboard_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1047 => [[['_route' => 'scoreboard_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1096 => [[['_route' => 'clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1138 => [[['_route' => 'clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1174 => [
            [['_route' => 'contest_add_contest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1223 => [
            [['_route' => 'contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'contest_change_start_time', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1280 => [[['_route' => 'contest_get_contest_yaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1319 => [[['_route' => 'contest_get_contest_state', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1352 => [[['_route' => 'contest_get_status', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1395 => [[['_route' => 'contest_get_event_feed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1451 => [[['_route' => 'executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1486 => [[['_route' => 'general_get_info', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1518 => [[['_route' => 'general_get_infoapi_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1559 => [[['_route' => 'general_get_status', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1597 => [[['_route' => 'general_get_user', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1642 => [[['_route' => 'user_add_group', '_controller' => 'App\\Controller\\API\\UserController::addGroupAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1678 => [[['_route' => 'user_add_teams', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1717 => [[['_route' => 'user_add_accounts', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1749 => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\API\\UserController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1791 => [[['_route' => 'user_single', '_controller' => 'App\\Controller\\API\\UserController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1836 => [[['_route' => 'general_get_database_configuration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1873 => [[['_route' => 'general_get_config_check', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1932 => [[['_route' => 'group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1974 => [[['_route' => 'group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2022 => [[['_route' => 'judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2064 => [[['_route' => 'judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2106 => [[['_route' => 'judgement_type_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2148 => [[['_route' => 'judgement_type_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2193 => [[['_route' => 'language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2235 => [[['_route' => 'language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2283 => [[['_route' => 'organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2325 => [[['_route' => 'organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2371 => [
            [['_route' => 'problems_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'problems_add_problem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null],
        ],
        2414 => [[['_route' => 'problems_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2453 => [[['_route' => 'run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2495 => [[['_route' => 'run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2540 => [[['_route' => 'scoreboard_get_scoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2584 => [[['_route' => 'submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2626 => [[['_route' => 'submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2657 => [[['_route' => 'submission_add_submission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null]],
        2706 => [[['_route' => 'submission_get_submission_filessubmission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2749 => [[['_route' => 'submission_get_submission_source_code', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2791 => [[['_route' => 'team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2833 => [[['_route' => 'team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2880 => [[['_route' => 'judgehost_create_judgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2925 => [[['_route' => 'judgehost_update_judge_host', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname', '_format'], ['PUT' => 0], null, false, true, null]],
        2986 => [[['_route' => 'judgehost_update_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['PUT' => 0], null, false, true, null]],
        3049 => [[['_route' => 'judgehost_add_judging_run', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['POST' => 0], null, false, true, null]],
        3095 => [[['_route' => 'judgehost_internal_error', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3127 => [[['_route' => 'judgehost_get_judgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3183 => [[['_route' => 'judgehost_get_next_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction', '_format' => 'json'], ['hostname', '_format'], ['POST' => 0], null, false, true, null]],
        3254 => [[['_route' => 'testcase_get_next_to_judge', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3318 => [[['_route' => 'testcase_get_file', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction', '_format' => 'json'], ['id', 'type', 'submitid', '_format'], ['GET' => 0], null, false, true, null]],
        3367 => [[['_route' => 'analysis_team', '_controller' => 'App\\Controller\\Jury\\AnalysisController::teamAction'], ['teamid'], null, null, false, true, null]],
        3392 => [[['_route' => 'analysis_problem', '_controller' => 'App\\Controller\\Jury\\AnalysisController::problemAction'], ['probid'], null, null, false, true, null]],
        3414 => [[['_route' => 'jury_ajax_data', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::ajaxDataAction'], ['datatype'], ['GET' => 0], null, false, true, null]],
        3443 => [[['_route' => 'jury_team_affiliation', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::viewAction'], ['affilId'], null, null, false, true, null]],
        3462 => [[['_route' => 'jury_team_affiliation_edit', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::editAction'], ['affilId'], null, null, false, false, null]],
        3483 => [[['_route' => 'jury_team_affiliation_delete', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::deleteAction'], ['affilId'], null, null, false, false, null]],
        3516 => [[['_route' => 'jury_balloons_setdone', '_controller' => 'App\\Controller\\Jury\\BalloonController::setDoneAction'], ['balloonId'], null, null, false, false, null]],
        3551 => [[['_route' => 'jury_clarification', '_controller' => 'App\\Controller\\Jury\\ClarificationController::viewAction'], ['id'], null, null, false, true, null]],
        3571 => [[['_route' => 'jury_clarification_claim', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleClaimAction'], ['clarId'], null, null, false, false, null]],
        3599 => [[['_route' => 'jury_clarification_set_answered', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleAnsweredAction'], ['clarId'], null, null, false, false, null]],
        3629 => [[['_route' => 'jury_clarification_change_subject', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeSubjectAction'], ['clarId'], null, null, false, false, null]],
        3657 => [[['_route' => 'jury_clarification_change_queue', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeQueueAction'], ['clarId'], null, null, false, false, null]],
        3683 => [[['_route' => 'jury_contest', '_controller' => 'App\\Controller\\Jury\\ContestController::viewAction'], ['contestId'], null, null, false, true, null]],
        3723 => [[['_route' => 'jury_contest_remove_interval', '_controller' => 'App\\Controller\\Jury\\ContestController::removeIntervalAction'], ['contestId', 'intervalId'], ['POST' => 0], null, false, true, null]],
        3742 => [[['_route' => 'jury_contest_edit', '_controller' => 'App\\Controller\\Jury\\ContestController::editAction'], ['contestId'], null, null, false, false, null]],
        3763 => [[['_route' => 'jury_contest_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteAction'], ['contestId'], null, null, false, false, null]],
        3799 => [[['_route' => 'jury_contest_problem_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        3822 => [[['_route' => 'jury_contest_finalize', '_controller' => 'App\\Controller\\Jury\\ContestController::finalizeAction'], ['contestId'], null, null, false, false, null]],
        3854 => [[['_route' => 'jury_change_contest', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        3881 => [[['_route' => 'jury_team_category', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::viewAction'], ['categoryId'], null, null, false, true, null]],
        3900 => [[['_route' => 'jury_team_category_edit', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::editAction'], ['categoryId'], null, null, false, false, null]],
        3921 => [[['_route' => 'jury_team_category_delete', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::deleteAction'], ['categoryId'], null, null, false, false, null]],
        3955 => [[['_route' => 'jury_executable', '_controller' => 'App\\Controller\\Jury\\ExecutableController::viewAction'], ['execId'], null, null, false, true, null]],
        3975 => [[['_route' => 'jury_executable_content', '_controller' => 'App\\Controller\\Jury\\ExecutableController::contentAction'], ['execId'], null, null, false, false, null]],
        3998 => [[['_route' => 'jury_executable_download', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadAction'], ['execId'], null, null, false, false, null]],
        4016 => [[['_route' => 'jury_executable_download_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadSingleAction'], ['execId', 'index'], null, null, false, true, null]],
        4031 => [[['_route' => 'jury_executable_delete', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteAction'], ['execId'], null, null, false, false, null]],
        4048 => [[['_route' => 'jury_executable_edit', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editAction'], ['execId'], null, null, false, false, null]],
        4064 => [[['_route' => 'jury_executable_edit_files', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editFilesAction'], ['execId'], null, null, false, false, null]],
        4142 => [[['_route' => 'jury_tsv_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportTsvAction'], ['type'], null, null, false, false, null]],
        4194 => [[['_route' => 'jury_html_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportHtmlAction'], ['type'], null, null, false, false, null]],
        4228 => [[['_route' => 'jury_internal_error', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::viewAction'], ['errorId'], ['GET' => 0], null, false, true, null]],
        4259 => [[['_route' => 'jury_internal_error_handle', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::handleAction'], ['errorId', 'action'], ['POST' => 0], null, false, true, null]],
        4298 => [[['_route' => 'jury_judgehost', '_controller' => 'App\\Controller\\Jury\\JudgehostController::viewAction'], ['hostname'], ['GET' => 0], null, false, true, null]],
        4320 => [[['_route' => 'jury_judgehost_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deleteAction'], ['hostname'], null, null, false, false, null]],
        4337 => [[['_route' => 'jury_judgehost_deactivate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAction'], ['hostname'], null, null, false, false, null]],
        4355 => [[['_route' => 'jury_judgehost_activate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAction'], ['hostname'], null, null, false, false, null]],
        4379 => [[['_route' => 'jury_judgehost_activate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4403 => [[['_route' => 'jury_judgehost_deactivate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4436 => [[['_route' => 'jury_judgehost_restriction', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::viewAction'], ['restrictionId'], null, null, false, true, null]],
        4455 => [[['_route' => 'jury_judgehost_restriction_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::editAction'], ['restrictionId'], null, null, false, false, null]],
        4476 => [[['_route' => 'jury_judgehost_restriction_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::deleteAction'], ['restrictionId'], null, null, false, false, null]],
        4508 => [[['_route' => 'jury_language', '_controller' => 'App\\Controller\\Jury\\LanguageController::viewAction'], ['langId'], null, null, false, true, null]],
        4538 => [[['_route' => 'jury_language_toggle_submit', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleSubmitAction'], ['langId'], null, null, false, false, null]],
        4552 => [[['_route' => 'jury_language_toggle_judge', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleJudgeAction'], ['langId'], null, null, false, false, null]],
        4566 => [[['_route' => 'jury_language_edit', '_controller' => 'App\\Controller\\Jury\\LanguageController::editAction'], ['langId'], null, null, false, false, null]],
        4581 => [[['_route' => 'jury_language_delete', '_controller' => 'App\\Controller\\Jury\\LanguageController::deleteAction'], ['langId'], null, null, false, false, null]],
        4616 => [[['_route' => 'jury_export_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::exportAction'], ['problemId'], null, null, false, false, null]],
        4630 => [[['_route' => 'jury_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewAction'], ['probId'], null, null, false, true, null]],
        4649 => [[['_route' => 'jury_problem_text', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewTextAction'], ['probId'], null, null, false, false, null]],
        4673 => [[['_route' => 'jury_problem_testcases', '_controller' => 'App\\Controller\\Jury\\ProblemController::testcasesAction'], ['probId'], null, null, false, false, null]],
        4718 => [[['_route' => 'jury_problem_testcase_move', '_controller' => 'App\\Controller\\Jury\\ProblemController::moveTestcaseAction'], ['probId', 'rank', 'direction'], null, null, false, true, null]],
        4775 => [[['_route' => 'jury_problem_testcase_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchTestcaseAction'], ['probId', 'rank', 'type'], null, null, false, true, null]],
        4794 => [[['_route' => 'jury_problem_edit', '_controller' => 'App\\Controller\\Jury\\ProblemController::editAction'], ['probId'], null, null, false, false, null]],
        4815 => [[['_route' => 'jury_problem_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAction'], ['probId'], null, null, false, false, null]],
        4844 => [[['_route' => 'jury_rejudging', '_controller' => 'App\\Controller\\Jury\\RejudgingController::viewAction'], ['rejudgingId'], null, null, false, true, null]],
        4873 => [[['_route' => 'jury_rejudging_finish', '_controller' => 'App\\Controller\\Jury\\RejudgingController::finishAction'], ['rejudgingId', 'action'], null, null, false, true, null]],
        4903 => [[['_route' => 'jury_submission', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        4939 => [[['_route' => 'jury_submission_by_judging', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction'], ['jid'], null, null, false, true, null]],
        4969 => [[['_route' => 'jury_submission_by_external_id', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalIdAction'], ['externalId'], null, null, false, true, null]],
        5026 => [[['_route' => 'jury_submission_team_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::teamOutputAction'], ['submission', 'contest', 'run'], null, null, false, false, null]],
        5041 => [[['_route' => 'jury_submission_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::sourceAction'], ['submission'], null, null, false, false, null]],
        5062 => [[['_route' => 'jury_submission_edit_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::editSourceAction'], ['submission'], null, null, false, false, null]],
        5092 => [[['_route' => 'jury_submission_update_status', '_controller' => 'App\\Controller\\Jury\\SubmissionController::updateStatusAction'], ['submitId'], ['POST' => 0], null, false, false, null]],
        5113 => [[['_route' => 'jury_judging_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyAction'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        5137 => [[['_route' => 'jury_team', '_controller' => 'App\\Controller\\Jury\\TeamController::viewAction'], ['teamId'], null, null, false, true, null]],
        5156 => [[['_route' => 'jury_team_edit', '_controller' => 'App\\Controller\\Jury\\TeamController::editAction'], ['teamId'], null, null, false, false, null]],
        5177 => [[['_route' => 'jury_team_delete', '_controller' => 'App\\Controller\\Jury\\TeamController::deleteAction'], ['teamId'], null, null, false, false, null]],
        5201 => [[['_route' => 'jury_user', '_controller' => 'App\\Controller\\Jury\\UserController::viewAction'], ['userId'], null, null, false, true, null]],
        5220 => [[['_route' => 'jury_user_edit', '_controller' => 'App\\Controller\\Jury\\UserController::editAction'], ['userId'], null, null, false, false, null]],
        5241 => [[['_route' => 'jury_user_delete', '_controller' => 'App\\Controller\\Jury\\UserController::deleteAction'], ['userId'], null, null, false, false, null]],
        5286 => [[['_route' => 'public_change_contest', '_controller' => 'App\\Controller\\PublicController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5305 => [[['_route' => 'public_team', '_controller' => 'App\\Controller\\PublicController::teamAction'], ['teamId'], null, null, false, true, null]],
        5333 => [[['_route' => 'public_problem_text', '_controller' => 'App\\Controller\\PublicController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5375 => [[['_route' => 'public_problem_sample_testcase', '_controller' => 'App\\Controller\\PublicController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5402 => [[['_route' => 'public_problem_sample_zip', '_controller' => 'App\\Controller\\PublicController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5444 => [[['_route' => 'team_clarification', '_controller' => 'App\\Controller\\Team\\ClarificationController::viewAction'], ['clarId'], null, null, false, true, null]],
        5475 => [[['_route' => 'team_change_contest', '_controller' => 'App\\Controller\\Team\\MiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5504 => [[['_route' => 'team_problem_text', '_controller' => 'App\\Controller\\Team\\ProblemController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5546 => [[['_route' => 'team_problem_sample_testcase', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5573 => [[['_route' => 'team_problem_sample_zip', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5600 => [[['_route' => 'problemlist', '_controller' => 'App\\Controller\\Team\\ProblemController::problemlistAction'], ['probId'], null, null, false, true, null]],
        5619 => [[['_route' => 'team_team', '_controller' => 'App\\Controller\\Team\\ScoreboardController::teamAction'], ['teamId'], null, null, false, true, null]],
        5644 => [
            [['_route' => 'team_submission', '_controller' => 'App\\Controller\\Team\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
