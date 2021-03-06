<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Jury\ConfigController' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/Jury/ConfigController.php';

$this->services['App\\Controller\\Jury\\ConfigController'] = $instance = new \App\Controller\Jury\ConfigController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->privates['App\\Service\\CheckConfigService'] ?? $this->load('getCheckConfigServiceService.php')));

$instance->setContainer(($this->privates['.service_locator.rRajHyH'] ?? $this->load('get_ServiceLocator_RRajHyHService.php'))->withContext('App\\Controller\\Jury\\ConfigController', $this));

return $instance;
