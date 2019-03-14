<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use App\Service\MarkdownHelper;
//use Symfony\Component\DependencyInjection\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Psr\Container\ContainerInterface;

class AppExtension extends AbstractExtension implements ServiceSubscriberInterface
{

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('cached_markdown', [$this, 'processMarkdown']),
        ];
    }

    public function processMarkdown($value)
    {
        return $this->container
            ->get('mkd')
            ->parse($value);
    }

    public static function getSubscribedServices()
    {
        return [
            'mkd' => MarkdownHelper::class,
        ];
    }
}
