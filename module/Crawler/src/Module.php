<?php

namespace Crawler;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     * @see ConfigProviderInterface::getConfig()
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * {@inheritdoc}
     * @see ServiceProviderInterface::getServiceConfig()
     */
    public function getServiceConfig()
    {
        return [
            'factories' => [
                'Crawler\Service\Scraper' => function ($sm) {
                    return new \Crawler\Service\Scraper();
                },
            ],
        ];
    }
}
