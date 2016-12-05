<?php

namespace Crawler\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $client;

    public function indexAction()
    {
        $scraper = new \Raulr\GooglePlayScraper\Scraper($this->getClient());
        $app = $scraper->getApp('com.mojang.minecraftpe');

        var_dump($app);
        exit;

        return new ViewModel();
    }

    /**
     * Get client
     *
     * @return \GuzzleHttp\Client
     */
    private function getClient()
    {
        if (! $this->client) {
            $this->client = new \GuzzleHttp\Client([
                'defaults' => [
                    'allow_redirects' => false,
                    'cookies'         => true,
                ],
                'curl'     => [
                    CURLOPT_SSL_VERIFYPEER => false,
                ],
            ]);
        }

        return $this->client;
    }

    public function updateAction()
    {
        $id = $this->params()->fromRoute()->get('id', 'com.mojang.minecraftpe');

        $scraper = new \Raulr\GooglePlayScraper\Scraper($this->getClient());
        $app = $scraper->getApp($id);

        var_dump($app);
        exit;

        return new ViewModel();
    }
}
