<?php

namespace Crawler\Service;

class Scraper extends \Raulr\GooglePlayScraper\Scraper
{
    public function __construct()
    {
        parent::__construct(new \GuzzleHttp\Client([
            'defaults' => [
                'allow_redirects' => false,
                'cookies'         => true,
            ],
            'curl'     => [
                CURLOPT_SSL_VERIFYPEER => false,
            ],
        ]));
    }
}
