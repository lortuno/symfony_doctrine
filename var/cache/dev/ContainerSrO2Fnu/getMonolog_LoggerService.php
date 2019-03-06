<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.logger' shared service.

$this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

$instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
$instance->useMicrosecondTimestamps(true);
$instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
$instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $instance;
