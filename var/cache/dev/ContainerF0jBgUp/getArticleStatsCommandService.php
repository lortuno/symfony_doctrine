<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Command\ArticleStatsCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/src/Command/ArticleStatsCommand.php';

$this->privates['App\Command\ArticleStatsCommand'] = $instance = new \App\Command\ArticleStatsCommand();

$instance->setName('article:stats');

return $instance;