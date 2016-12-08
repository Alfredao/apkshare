<?php

namespace Crawler\Controller;

use Application\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $scraper = $this->getServiceLocator()->get('Crawler\Service\Scraper');
        $app = $scraper->getApp('com.mojang.minecraftpe');

        var_dump($app);
        exit;
    }

    public function categoryAction()
    {
        $scraper = $this->getServiceLocator()->get('Crawler\Service\Scraper');
        $categories = $scraper->getCategories();

        var_dump($categories);
        exit;
    }

    public function listAction()
    {
        $scraper = $this->getServiceLocator()->get('Crawler\Service\Scraper');
        $apps = $scraper->getList('topselling_free', 'SOCIAL');

        var_dump($apps);
        exit;
    }
}
