<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.command.debug' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/twig-bridge/Command/DebugCommand.php';

$this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), $this->targetDirs[3], $this->getParameter('kernel.bundles_metadata'), ($this->targetDirs[3].'/templates'), ($this->targetDirs[3].'/src'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

$instance->setName('debug:twig');

return $instance;
