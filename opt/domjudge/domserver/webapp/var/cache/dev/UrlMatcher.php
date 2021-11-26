<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
        '/public/homepage' => [[['_route' => 'public_homepage', '_controller' => 'App\\Controller\\PublicController::indexAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::redirectAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::registerAction'], null, null, null, false, false, null]],
        '/team/clarifications/add' => [[['_route' => 'team_clarification_add', '_controller' => 'App\\Controller\\Team\\ClarificationController::addAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\Team\\MiscController::homeAction'], null, null, null, false, false, null]],
        '/team/print' => [[['_route' => 'team_print', '_controller' => 'App\\Controller\\Team\\MiscController::printAction'], null, null, null, false, false, null]],
        '/team/homepage' => [[['_route' => 'team_homepage', '_controller' => 'App\\Controller\\Team\\MiscController::indexAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api(?'
                    .'|/(?'
                        .'|v(?'
                            .'|4/(?'
                                .'|contests/([^/]++)(?'
                                    .'|/(?'
                                        .'|awards(?'
                                            .'|(*:222)'
                                            .'|/([^/]++)(*:239)'
                                        .')'
                                        .'|c(?'
                                            .'|larifications(?'
                                                .'|(*:268)'
                                                .'|/([^/]++)(*:285)'
                                            .')'
                                            .'|ontest\\-yaml(*:306)'
                                        .')'
                                        .'|s(?'
                                            .'|tat(?'
                                                .'|e(*:326)'
                                                .'|us(*:336)'
                                            .')'
                                            .'|coreboard(*:354)'
                                            .'|ubmissions(?'
                                                .'|(*:375)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:395)'
                                                    .'|/(?'
                                                        .'|files(*:412)'
                                                        .'|source\\-code(*:432)'
                                                    .')'
                                                .')'
                                                .'|(*:442)'
                                            .')'
                                        .')'
                                        .'|event\\-feed(*:463)'
                                        .'|groups(?'
                                            .'|(*:480)'
                                            .'|/([^/]++)(*:497)'
                                        .')'
                                        .'|judgement(?'
                                            .'|s(?'
                                                .'|(*:522)'
                                                .'|/([^/]++)(*:539)'
                                            .')'
                                            .'|\\-types(?'
                                                .'|(*:558)'
                                                .'|/([^/]++)(*:575)'
                                            .')'
                                        .')'
                                        .'|languages(?'
                                            .'|(*:597)'
                                            .'|/([^/]++)(*:614)'
                                        .')'
                                        .'|organizations(?'
                                            .'|(*:639)'
                                            .'|/([^/]++)(*:656)'
                                        .')'
                                        .'|problems(?'
                                            .'|(*:676)'
                                            .'|/([^/]++)(*:693)'
                                        .')'
                                        .'|runs(?'
                                            .'|(*:709)'
                                            .'|/([^/]++)(*:726)'
                                        .')'
                                        .'|teams(?'
                                            .'|(*:743)'
                                            .'|/([^/]++)(*:760)'
                                        .')'
                                    .')'
                                    .'|(*:770)'
                                .')'
                                .'|executables/([^/]++)(*:799)'
                                .'|judgehosts/(?'
                                    .'|([^/]++)(*:829)'
                                    .'|next\\-judging/([^/]++)(*:859)'
                                    .'|update\\-judging/([^/]++)/(\\d+)(*:897)'
                                    .'|add\\-judging\\-run/([^/]++)/(\\d+)(*:937)'
                                    .'|internal\\-error(*:960)'
                                .')'
                                .'|testcases/(?'
                                    .'|next\\-to\\-judge/([^/]++)(*:1006)'
                                    .'|([^/]++)/file/([^/]++)/([^/]++)(*:1046)'
                                .')'
                                .'|users/([^/]++)(*:1070)'
                            .')'
                            .'|ersion(?:\\.(json|xml|html))?(*:1108)'
                        .')'
                        .'|contests(?'
                            .'|/([^/]++)/(?'
                                .'|awards(?'
                                    .'|(?:\\.(json|xml|html))?(*:1173)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1215)'
                                .')'
                                .'|clarifications(?'
                                    .'|(?:\\.(json|xml|html))?(*:1264)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1306)'
                                .')'
                            .')'
                            .'|(?:\\.(json|xml|html))?(?'
                                .'|(*:1342)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(?'
                                    .'|(*:1391)'
                                .')'
                                .'|([^/]++)/(?'
                                    .'|contest\\-yaml(?:\\.(json|xml|html))?(*:1448)'
                                    .'|stat(?'
                                        .'|e(?:\\.(json|xml|html))?(*:1487)'
                                        .'|us(?:\\.(json|xml|html))?(*:1520)'
                                    .')'
                                    .'|event\\-feed(?:\\.(json|xml|html))?(*:1563)'
                                .')'
                            .')'
                        .')'
                        .'|executables/([^/\\.]++)(?:\\.(json|xml|html))?(*:1619)'
                        .'|info(?:\\.(json|xml|html))?(*:1654)'
                    .')'
                    .'|(?:\\.(json|xml|html))?(*:1686)'
                    .'|/(?'
                        .'|status(?:\\.(json|xml|html))?(*:1727)'
                        .'|user(?'
                            .'|(?:\\.(json|xml|html))?(*:1765)'
                            .'|s(?'
                                .'|/(?'
                                    .'|groups(?:\\.(json|xml|html))?(*:1810)'
                                    .'|teams(?:\\.(json|xml|html))?(*:1846)'
                                    .'|accounts(?:\\.(json|xml|html))?(*:1885)'
                                .')'
                                .'|(?:\\.(json|xml|html))?(*:1917)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1959)'
                            .')'
                        .')'
                        .'|con(?'
                            .'|fig(?'
                                .'|(?:\\.(json|xml|html))?(*:2004)'
                                .'|/check(?:\\.(json|xml|html))?(*:2041)'
                            .')'
                            .'|tests/([^/]++)/(?'
                                .'|groups(?'
                                    .'|(?:\\.(json|xml|html))?(*:2100)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2142)'
                                .')'
                                .'|judgement(?'
                                    .'|s(?'
                                        .'|(?:\\.(json|xml|html))?(*:2190)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2232)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(?:\\.(json|xml|html))?(*:2274)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2316)'
                                    .')'
                                .')'
                                .'|languages(?'
                                    .'|(?:\\.(json|xml|html))?(*:2361)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2403)'
                                .')'
                                .'|organizations(?'
                                    .'|(?:\\.(json|xml|html))?(*:2451)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2493)'
                                .')'
                                .'|problems(?'
                                    .'|(?:\\.(json|xml|html))?(?'
                                        .'|(*:2539)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2582)'
                                .')'
                                .'|runs(?'
                                    .'|(?:\\.(json|xml|html))?(*:2621)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2663)'
                                .')'
                                .'|s(?'
                                    .'|coreboard(?:\\.(json|xml|html))?(*:2708)'
                                    .'|ubmissions(?'
                                        .'|(?:\\.(json|xml|html))?(*:2752)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2794)'
                                        .'|(?:\\.(json|xml|html))?(*:2825)'
                                        .'|/([^/]++)/(?'
                                            .'|files(?:\\.(json|xml|html))?(*:2874)'
                                            .'|source\\-code(?:\\.(json|xml|html))?(*:2917)'
                                        .')'
                                    .')'
                                .')'
                                .'|teams(?'
                                    .'|(?:\\.(json|xml|html))?(*:2959)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:3001)'
                                .')'
                            .')'
                        .')'
                        .'|judgehosts(?'
                            .'|(?:\\.(json|xml|html))?(*:3048)'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(*:3093)'
                                .'|update\\-judging/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:3154)'
                                .'|add\\-judging\\-run/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:3217)'
                                .'|internal\\-error(?:\\.(json|xml|html))?(*:3263)'
                            .')'
                            .'|(?:\\.(json|xml|html))?(*:3295)'
                            .'|/next\\-judging/([^/\\.]++)(?:\\.(json|xml|html))?(*:3351)'
                        .')'
                        .'|testcases/(?'
                            .'|next\\-to\\-judge/([^/\\.]++)(?:\\.(json|xml|html))?(*:3422)'
                            .'|([^/]++)/file/([^/]++)/([^/\\.]++)(?:\\.(json|xml|html))?(*:3486)'
                        .')'
                    .')'
                .')'
                .'|/jury/(?'
                    .'|a(?'
                        .'|nalysis/(?'
                            .'|team/([^/]++)(*:3535)'
                            .'|problem/([^/]++)(*:3560)'
                        .')'
                        .'|jax/([^/]++)(*:3582)'
                        .'|ffiliations/(?'
                            .'|(\\d+)(*:3611)'
                            .'|(\\d+)/edit(*:3630)'
                            .'|(\\d+)/delete(*:3651)'
                        .')'
                    .')'
                    .'|balloons/([^/]++)/done(*:3684)'
                    .'|c(?'
                        .'|larifications/(?'
                            .'|(\\d+)(*:3719)'
                            .'|(\\d+)/claim(*:3739)'
                            .'|(\\d+)/set\\-answered(*:3767)'
                            .'|(\\d+)/change\\-subject(*:3797)'
                            .'|(\\d+)/change\\-queue(*:3825)'
                        .')'
                        .'|ontests/(?'
                            .'|(\\d+)(*:3851)'
                            .'|(\\d+)/remove\\-interval/([^/]++)(*:3891)'
                            .'|(\\d+)/edit(*:3910)'
                            .'|(\\d+)/delete(*:3931)'
                            .'|(\\d+)/problems/(\\d+)/delete(*:3967)'
                            .'|(\\d+)/finalize(*:3990)'
                        .')'
                        .'|hange\\-contest/(-?\\d+)(*:4022)'
                        .'|ategories/(?'
                            .'|(\\d+)(*:4049)'
                            .'|(\\d+)/edit(*:4068)'
                            .'|(\\d+)/delete(*:4089)'
                        .')'
                    .')'
                    .'|executables/([^/]++)(?'
                        .'|(*:4123)'
                        .'|/(?'
                            .'|content(*:4143)'
                            .'|d(?'
                                .'|ownload(?'
                                    .'|(*:4166)'
                                    .'|/([^/]++)(*:4184)'
                                .')'
                                .'|elete(*:4199)'
                            .')'
                            .'|edit(?'
                                .'|(*:4216)'
                                .'|\\-files(*:4232)'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export/export/(?'
                            .'|(groups|teams|scoreboard|results)\\.tsv(*:4310)'
                            .'|(results|results-icpc|clarifications)\\.html(*:4362)'
                        .')'
                        .'|nternal\\-errors/(?'
                            .'|(\\d+)(*:4396)'
                            .'|(\\d+)/(ignore|resolve)(*:4427)'
                        .')'
                    .')'
                    .'|judgehost(?'
                        .'|s/(?'
                            .'|([^/]++)(?'
                                .'|(*:4466)'
                                .'|/(?'
                                    .'|de(?'
                                        .'|lete(*:4488)'
                                        .'|activate(*:4505)'
                                    .')'
                                    .'|activate(*:4523)'
                                .')'
                            .')'
                            .'|activate\\-all(*:4547)'
                            .'|deactivate\\-all(*:4571)'
                        .')'
                        .'|\\-restrictions/(?'
                            .'|(\\d+)(*:4604)'
                            .'|(\\d+)/edit(*:4623)'
                            .'|(\\d+)/delete(*:4644)'
                        .')'
                    .')'
                    .'|languages/([^/]++)(?'
                        .'|(*:4676)'
                        .'|/(?'
                            .'|toggle\\-(?'
                                .'|submit(*:4706)'
                                .'|judge(*:4720)'
                            .')'
                            .'|edit(*:4734)'
                            .'|delete(*:4749)'
                        .')'
                    .')'
                    .'|problems/(?'
                        .'|(\\d+)/export(*:4784)'
                        .'|(\\d+)(*:4798)'
                        .'|(\\d+)/text(*:4817)'
                        .'|(\\d+)/testcases(*:4841)'
                        .'|(\\d+)/testcases/(\\d+)/move/(up|down)(*:4886)'
                        .'|(\\d+)/testcases/(\\d+)/fetch/(input|output|image)(*:4943)'
                        .'|(\\d+)/edit(*:4962)'
                        .'|(\\d+)/delete(*:4983)'
                    .')'
                    .'|rejudgings/(?'
                        .'|(\\d+)(*:5012)'
                        .'|(\\d+)/(cancel|apply)(*:5041)'
                    .')'
                    .'|submissions/(?'
                        .'|(\\d+)(*:5071)'
                        .'|by\\-(?'
                            .'|judging\\-id/([^/]++)(*:5107)'
                            .'|external\\-id/([^/]++)(*:5137)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|runs/([^/]++)/([^/]++)/team\\-output(*:5194)'
                            .'|source(*:5209)'
                            .'|edit\\-source(*:5230)'
                        .')'
                        .'|(\\d+)/update\\-status(*:5260)'
                        .'|(\\d+)/verify(*:5281)'
                    .')'
                    .'|teams/(?'
                        .'|(\\d+)(*:5305)'
                        .'|(\\d+)/edit(*:5324)'
                        .'|(\\d+)/delete(*:5345)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:5369)'
                        .'|(\\d+)/edit(*:5388)'
                        .'|(\\d+)/delete(*:5409)'
                    .')'
                .')'
                .'|/public/(?'
                    .'|change\\-contest/(-?\\d+)(*:5454)'
                    .'|team/(\\d+)(*:5473)'
                    .'|problems/(\\d+)/text(*:5501)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5543)'
                    .'|(\\d+)/samples\\.zip(*:5570)'
                .')'
                .'|/team/(?'
                    .'|c(?'
                        .'|larifications/(\\d+)(*:5612)'
                        .'|hange\\-contest/(-?\\d+)(*:5643)'
                    .')'
                    .'|problems/(\\d+)/text(*:5672)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5714)'
                    .'|(\\d+)/samples\\.zip(*:5741)'
                    .'|problem_list/(\\d+)(*:5768)'
                    .'|team/(\\d+)(*:5787)'
                    .'|submission/(\\d+)(*:5812)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        222 => [[['_route' => 'app_api_awards_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        239 => [[['_route' => 'app_api_awards_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'app_api_clarification_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        285 => [[['_route' => 'app_api_clarification_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'app_api_contest_getcontestyaml', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        326 => [[['_route' => 'app_api_contest_getconteststate', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        336 => [[['_route' => 'app_api_contest_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        354 => [[['_route' => 'app_api_scoreboard_getscoreboard', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        375 => [[['_route' => 'app_api_submission_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        395 => [[['_route' => 'app_api_submission_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'submission_files', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        432 => [[['_route' => 'app_api_submission_getsubmissionsourcecode', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        442 => [[['_route' => 'app_api_submission_addsubmission', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction'], ['cid'], ['POST' => 0], null, false, false, null]],
        463 => [[['_route' => 'app_api_contest_geteventfeed', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        480 => [[['_route' => 'app_api_group_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        497 => [[['_route' => 'app_api_group_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_api_judgement_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        539 => [[['_route' => 'app_api_judgement_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        558 => [[['_route' => 'app_api_judgementtype_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        575 => [[['_route' => 'app_api_judgementtype_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        597 => [[['_route' => 'app_api_language_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        614 => [[['_route' => 'app_api_language_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        639 => [[['_route' => 'app_api_organization_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        656 => [[['_route' => 'app_api_organization_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        676 => [
            [['_route' => 'app_api_problem_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::listAction'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_problem_addproblem', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        693 => [[['_route' => 'app_api_problem_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        709 => [[['_route' => 'app_api_run_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        726 => [[['_route' => 'app_api_run_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        743 => [[['_route' => 'app_api_team_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        760 => [[['_route' => 'app_api_team_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        770 => [
            [['_route' => 'app_api_contest_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::singleAction'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_contest_changestarttime', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        799 => [[['_route' => 'app_api_executable_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        829 => [[['_route' => 'app_api_judgehost_updatejudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        859 => [[['_route' => 'app_api_judgehost_getnextjudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction'], ['hostname'], ['POST' => 0], null, false, true, null]],
        897 => [[['_route' => 'app_api_judgehost_updatejudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction'], ['hostname', 'judgingId'], ['PUT' => 0], null, false, true, null]],
        937 => [[['_route' => 'app_api_judgehost_addjudgingrun', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction'], ['hostname', 'judgingId'], ['POST' => 0], null, false, true, null]],
        960 => [[['_route' => 'app_api_judgehost_internalerror', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction'], [], ['POST' => 0], null, false, false, null]],
        1006 => [[['_route' => 'app_api_testcase_getnexttojudge', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1046 => [[['_route' => 'app_api_testcase_getfile', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction'], ['id', 'type', 'submitid'], ['GET' => 0], null, false, true, null]],
        1070 => [[['_route' => 'app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1108 => [[['_route' => 'general_get_version', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1173 => [[['_route' => 'scoreboard_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1215 => [[['_route' => 'scoreboard_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1264 => [[['_route' => 'clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1306 => [[['_route' => 'clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1342 => [
            [['_route' => 'contest_add_contest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1391 => [
            [['_route' => 'contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'contest_change_start_time', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1448 => [[['_route' => 'contest_get_contest_yaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1487 => [[['_route' => 'contest_get_contest_state', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1520 => [[['_route' => 'contest_get_status', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1563 => [[['_route' => 'contest_get_event_feed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1619 => [[['_route' => 'executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1654 => [[['_route' => 'general_get_info', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1686 => [[['_route' => 'general_get_infoapi_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1727 => [[['_route' => 'general_get_status', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1765 => [[['_route' => 'general_get_user', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1810 => [[['_route' => 'user_add_group', '_controller' => 'App\\Controller\\API\\UserController::addGroupAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1846 => [[['_route' => 'user_add_teams', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1885 => [[['_route' => 'user_add_accounts', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1917 => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\API\\UserController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1959 => [[['_route' => 'user_single', '_controller' => 'App\\Controller\\API\\UserController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2004 => [[['_route' => 'general_get_database_configuration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2041 => [[['_route' => 'general_get_config_check', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2100 => [[['_route' => 'group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2142 => [[['_route' => 'group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2190 => [[['_route' => 'judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2232 => [[['_route' => 'judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2274 => [[['_route' => 'judgement_type_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2316 => [[['_route' => 'judgement_type_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2361 => [[['_route' => 'language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2403 => [[['_route' => 'language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2451 => [[['_route' => 'organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2493 => [[['_route' => 'organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2539 => [
            [['_route' => 'problems_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'problems_add_problem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null],
        ],
        2582 => [[['_route' => 'problems_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2621 => [[['_route' => 'run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2663 => [[['_route' => 'run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2708 => [[['_route' => 'scoreboard_get_scoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2752 => [[['_route' => 'submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2794 => [[['_route' => 'submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2825 => [[['_route' => 'submission_add_submission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null]],
        2874 => [[['_route' => 'submission_get_submission_filessubmission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2917 => [[['_route' => 'submission_get_submission_source_code', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2959 => [[['_route' => 'team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        3001 => [[['_route' => 'team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3048 => [[['_route' => 'judgehost_create_judgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3093 => [[['_route' => 'judgehost_update_judge_host', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname', '_format'], ['PUT' => 0], null, false, true, null]],
        3154 => [[['_route' => 'judgehost_update_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['PUT' => 0], null, false, true, null]],
        3217 => [[['_route' => 'judgehost_add_judging_run', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['POST' => 0], null, false, true, null]],
        3263 => [[['_route' => 'judgehost_internal_error', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3295 => [[['_route' => 'judgehost_get_judgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3351 => [[['_route' => 'judgehost_get_next_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction', '_format' => 'json'], ['hostname', '_format'], ['POST' => 0], null, false, true, null]],
        3422 => [[['_route' => 'testcase_get_next_to_judge', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3486 => [[['_route' => 'testcase_get_file', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction', '_format' => 'json'], ['id', 'type', 'submitid', '_format'], ['GET' => 0], null, false, true, null]],
        3535 => [[['_route' => 'analysis_team', '_controller' => 'App\\Controller\\Jury\\AnalysisController::teamAction'], ['teamid'], null, null, false, true, null]],
        3560 => [[['_route' => 'analysis_problem', '_controller' => 'App\\Controller\\Jury\\AnalysisController::problemAction'], ['probid'], null, null, false, true, null]],
        3582 => [[['_route' => 'jury_ajax_data', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::ajaxDataAction'], ['datatype'], ['GET' => 0], null, false, true, null]],
        3611 => [[['_route' => 'jury_team_affiliation', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::viewAction'], ['affilId'], null, null, false, true, null]],
        3630 => [[['_route' => 'jury_team_affiliation_edit', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::editAction'], ['affilId'], null, null, false, false, null]],
        3651 => [[['_route' => 'jury_team_affiliation_delete', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::deleteAction'], ['affilId'], null, null, false, false, null]],
        3684 => [[['_route' => 'jury_balloons_setdone', '_controller' => 'App\\Controller\\Jury\\BalloonController::setDoneAction'], ['balloonId'], null, null, false, false, null]],
        3719 => [[['_route' => 'jury_clarification', '_controller' => 'App\\Controller\\Jury\\ClarificationController::viewAction'], ['id'], null, null, false, true, null]],
        3739 => [[['_route' => 'jury_clarification_claim', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleClaimAction'], ['clarId'], null, null, false, false, null]],
        3767 => [[['_route' => 'jury_clarification_set_answered', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleAnsweredAction'], ['clarId'], null, null, false, false, null]],
        3797 => [[['_route' => 'jury_clarification_change_subject', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeSubjectAction'], ['clarId'], null, null, false, false, null]],
        3825 => [[['_route' => 'jury_clarification_change_queue', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeQueueAction'], ['clarId'], null, null, false, false, null]],
        3851 => [[['_route' => 'jury_contest', '_controller' => 'App\\Controller\\Jury\\ContestController::viewAction'], ['contestId'], null, null, false, true, null]],
        3891 => [[['_route' => 'jury_contest_remove_interval', '_controller' => 'App\\Controller\\Jury\\ContestController::removeIntervalAction'], ['contestId', 'intervalId'], ['POST' => 0], null, false, true, null]],
        3910 => [[['_route' => 'jury_contest_edit', '_controller' => 'App\\Controller\\Jury\\ContestController::editAction'], ['contestId'], null, null, false, false, null]],
        3931 => [[['_route' => 'jury_contest_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteAction'], ['contestId'], null, null, false, false, null]],
        3967 => [[['_route' => 'jury_contest_problem_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        3990 => [[['_route' => 'jury_contest_finalize', '_controller' => 'App\\Controller\\Jury\\ContestController::finalizeAction'], ['contestId'], null, null, false, false, null]],
        4022 => [[['_route' => 'jury_change_contest', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        4049 => [[['_route' => 'jury_team_category', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::viewAction'], ['categoryId'], null, null, false, true, null]],
        4068 => [[['_route' => 'jury_team_category_edit', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::editAction'], ['categoryId'], null, null, false, false, null]],
        4089 => [[['_route' => 'jury_team_category_delete', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::deleteAction'], ['categoryId'], null, null, false, false, null]],
        4123 => [[['_route' => 'jury_executable', '_controller' => 'App\\Controller\\Jury\\ExecutableController::viewAction'], ['execId'], null, null, false, true, null]],
        4143 => [[['_route' => 'jury_executable_content', '_controller' => 'App\\Controller\\Jury\\ExecutableController::contentAction'], ['execId'], null, null, false, false, null]],
        4166 => [[['_route' => 'jury_executable_download', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadAction'], ['execId'], null, null, false, false, null]],
        4184 => [[['_route' => 'jury_executable_download_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadSingleAction'], ['execId', 'index'], null, null, false, true, null]],
        4199 => [[['_route' => 'jury_executable_delete', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteAction'], ['execId'], null, null, false, false, null]],
        4216 => [[['_route' => 'jury_executable_edit', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editAction'], ['execId'], null, null, false, false, null]],
        4232 => [[['_route' => 'jury_executable_edit_files', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editFilesAction'], ['execId'], null, null, false, false, null]],
        4310 => [[['_route' => 'jury_tsv_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportTsvAction'], ['type'], null, null, false, false, null]],
        4362 => [[['_route' => 'jury_html_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportHtmlAction'], ['type'], null, null, false, false, null]],
        4396 => [[['_route' => 'jury_internal_error', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::viewAction'], ['errorId'], ['GET' => 0], null, false, true, null]],
        4427 => [[['_route' => 'jury_internal_error_handle', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::handleAction'], ['errorId', 'action'], ['POST' => 0], null, false, true, null]],
        4466 => [[['_route' => 'jury_judgehost', '_controller' => 'App\\Controller\\Jury\\JudgehostController::viewAction'], ['hostname'], ['GET' => 0], null, false, true, null]],
        4488 => [[['_route' => 'jury_judgehost_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deleteAction'], ['hostname'], null, null, false, false, null]],
        4505 => [[['_route' => 'jury_judgehost_deactivate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAction'], ['hostname'], null, null, false, false, null]],
        4523 => [[['_route' => 'jury_judgehost_activate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAction'], ['hostname'], null, null, false, false, null]],
        4547 => [[['_route' => 'jury_judgehost_activate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4571 => [[['_route' => 'jury_judgehost_deactivate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4604 => [[['_route' => 'jury_judgehost_restriction', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::viewAction'], ['restrictionId'], null, null, false, true, null]],
        4623 => [[['_route' => 'jury_judgehost_restriction_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::editAction'], ['restrictionId'], null, null, false, false, null]],
        4644 => [[['_route' => 'jury_judgehost_restriction_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::deleteAction'], ['restrictionId'], null, null, false, false, null]],
        4676 => [[['_route' => 'jury_language', '_controller' => 'App\\Controller\\Jury\\LanguageController::viewAction'], ['langId'], null, null, false, true, null]],
        4706 => [[['_route' => 'jury_language_toggle_submit', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleSubmitAction'], ['langId'], null, null, false, false, null]],
        4720 => [[['_route' => 'jury_language_toggle_judge', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleJudgeAction'], ['langId'], null, null, false, false, null]],
        4734 => [[['_route' => 'jury_language_edit', '_controller' => 'App\\Controller\\Jury\\LanguageController::editAction'], ['langId'], null, null, false, false, null]],
        4749 => [[['_route' => 'jury_language_delete', '_controller' => 'App\\Controller\\Jury\\LanguageController::deleteAction'], ['langId'], null, null, false, false, null]],
        4784 => [[['_route' => 'jury_export_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::exportAction'], ['problemId'], null, null, false, false, null]],
        4798 => [[['_route' => 'jury_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewAction'], ['probId'], null, null, false, true, null]],
        4817 => [[['_route' => 'jury_problem_text', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewTextAction'], ['probId'], null, null, false, false, null]],
        4841 => [[['_route' => 'jury_problem_testcases', '_controller' => 'App\\Controller\\Jury\\ProblemController::testcasesAction'], ['probId'], null, null, false, false, null]],
        4886 => [[['_route' => 'jury_problem_testcase_move', '_controller' => 'App\\Controller\\Jury\\ProblemController::moveTestcaseAction'], ['probId', 'rank', 'direction'], null, null, false, true, null]],
        4943 => [[['_route' => 'jury_problem_testcase_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchTestcaseAction'], ['probId', 'rank', 'type'], null, null, false, true, null]],
        4962 => [[['_route' => 'jury_problem_edit', '_controller' => 'App\\Controller\\Jury\\ProblemController::editAction'], ['probId'], null, null, false, false, null]],
        4983 => [[['_route' => 'jury_problem_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAction'], ['probId'], null, null, false, false, null]],
        5012 => [[['_route' => 'jury_rejudging', '_controller' => 'App\\Controller\\Jury\\RejudgingController::viewAction'], ['rejudgingId'], null, null, false, true, null]],
        5041 => [[['_route' => 'jury_rejudging_finish', '_controller' => 'App\\Controller\\Jury\\RejudgingController::finishAction'], ['rejudgingId', 'action'], null, null, false, true, null]],
        5071 => [[['_route' => 'jury_submission', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        5107 => [[['_route' => 'jury_submission_by_judging', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction'], ['jid'], null, null, false, true, null]],
        5137 => [[['_route' => 'jury_submission_by_external_id', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalIdAction'], ['externalId'], null, null, false, true, null]],
        5194 => [[['_route' => 'jury_submission_team_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::teamOutputAction'], ['submission', 'contest', 'run'], null, null, false, false, null]],
        5209 => [[['_route' => 'jury_submission_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::sourceAction'], ['submission'], null, null, false, false, null]],
        5230 => [[['_route' => 'jury_submission_edit_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::editSourceAction'], ['submission'], null, null, false, false, null]],
        5260 => [[['_route' => 'jury_submission_update_status', '_controller' => 'App\\Controller\\Jury\\SubmissionController::updateStatusAction'], ['submitId'], ['POST' => 0], null, false, false, null]],
        5281 => [[['_route' => 'jury_judging_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyAction'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        5305 => [[['_route' => 'jury_team', '_controller' => 'App\\Controller\\Jury\\TeamController::viewAction'], ['teamId'], null, null, false, true, null]],
        5324 => [[['_route' => 'jury_team_edit', '_controller' => 'App\\Controller\\Jury\\TeamController::editAction'], ['teamId'], null, null, false, false, null]],
        5345 => [[['_route' => 'jury_team_delete', '_controller' => 'App\\Controller\\Jury\\TeamController::deleteAction'], ['teamId'], null, null, false, false, null]],
        5369 => [[['_route' => 'jury_user', '_controller' => 'App\\Controller\\Jury\\UserController::viewAction'], ['userId'], null, null, false, true, null]],
        5388 => [[['_route' => 'jury_user_edit', '_controller' => 'App\\Controller\\Jury\\UserController::editAction'], ['userId'], null, null, false, false, null]],
        5409 => [[['_route' => 'jury_user_delete', '_controller' => 'App\\Controller\\Jury\\UserController::deleteAction'], ['userId'], null, null, false, false, null]],
        5454 => [[['_route' => 'public_change_contest', '_controller' => 'App\\Controller\\PublicController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5473 => [[['_route' => 'public_team', '_controller' => 'App\\Controller\\PublicController::teamAction'], ['teamId'], null, null, false, true, null]],
        5501 => [[['_route' => 'public_problem_text', '_controller' => 'App\\Controller\\PublicController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5543 => [[['_route' => 'public_problem_sample_testcase', '_controller' => 'App\\Controller\\PublicController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5570 => [[['_route' => 'public_problem_sample_zip', '_controller' => 'App\\Controller\\PublicController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5612 => [[['_route' => 'team_clarification', '_controller' => 'App\\Controller\\Team\\ClarificationController::viewAction'], ['clarId'], null, null, false, true, null]],
        5643 => [[['_route' => 'team_change_contest', '_controller' => 'App\\Controller\\Team\\MiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5672 => [[['_route' => 'team_problem_text', '_controller' => 'App\\Controller\\Team\\ProblemController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5714 => [[['_route' => 'team_problem_sample_testcase', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5741 => [[['_route' => 'team_problem_sample_zip', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5768 => [[['_route' => 'problemlist', '_controller' => 'App\\Controller\\Team\\ProblemController::problemlistAction'], ['probId'], null, null, false, true, null]],
        5787 => [[['_route' => 'team_team', '_controller' => 'App\\Controller\\Team\\ScoreboardController::teamAction'], ['teamId'], null, null, false, true, null]],
        5812 => [
            [['_route' => 'team_submission', '_controller' => 'App\\Controller\\Team\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
