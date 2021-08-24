<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

class OpenWeather
{
    private $apiUrl = 'https://api.openweathermap.org/data/2.5/weather?';
    private $client;
    private $apiKey = '1ef9836dabf4760aa8669e14652a1054';


  public function __construct()
  {
    $this->client = HttpClient::create();
  }


    public function getWeather($city)
    {
            $response = $this->client->request(
                'GET',
          $this->apiUrl
          . 'q=' . $city
          . '&units=metric'
          . '&lang=fr'
          . '&appid=' . $this->apiKey
            );
            return $response->toArray();
    }

}