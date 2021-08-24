<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

class Unsplash
{
    private $apiUrl = 'https://api.unsplash.com/';
    private $client;
    private $apiKey = 'E20V1lgSTpkRxJR-pB4bx9ALYIcK-WofyBfqNfr7jqo';


  public function __construct()
  {
    $this->client = HttpClient::create();
  }


    public function getPicture($city)
    {
            $response = $this->client->request(
                'GET',
          $this->apiUrl
          . 'search/photos?query=' . $city
          . '&client_id=' . $this->apiKey
            );
            return $response->toArray();
    }


    public function getRandomPicture($city)
    {
            $response = $this->client->request(
                'GET',
          $this->apiUrl
          . 'photos?query=' . $city
          . '&client_id=' . $this->apiKey
            );
            return $response->toArray();
    }

}