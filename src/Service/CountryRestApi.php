<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CountryRestApi
{
    private $apiCountryUrl = 'https://restcountries.eu/rest/v2/';
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client= $client;
    }
    
    public function region(): array
    {
        $response = $this->client->request(
            'GET',
            $this->apiCountryUrl. 'all'
        );
        return $response->toArray();
    }

    public function countryByContinent($continent): array
    {
        $response =$this->client->request(
            'GET',
            $this->apiCountryUrl. 'region/'.$continent
        );
        
        return $response->toArray();
    }
    
    public function fetch($country): array
    {
        
        $response= $this->client->request(
            'GET',
            $this->apiCountryUrl.'name/'.$country . '?fullText=true'
        );
        return $response->toArray();
    }

    public function detailsOfCountry ($country)
    {
        $response =$this->client->request(
            'GET',
            $this->apiCountryUrl . 'name/'. $country . '?fields=name;capital;languages;region;currencies;flag'
        );
        return $response->toArray();
    }
}
//https://restcountries.eu/rest/v2/{service}?fields={field};{field};{field}
