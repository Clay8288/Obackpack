<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Entity\Country;
use App\Repository\ContinentRepository;
use App\Repository\CountryRepository;
use App\Repository\StuffRepository;
use App\Repository\WeatherRepository;
use App\Service\OpenWeather;
use App\Service\CountryRestApi;
use App\Service\Unsplash;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="location_", requirements={"id" = "\d+"})
 */
class LocationController extends AbstractController
{
    /**
     * Method to display the list of continents
     * @Route("continent", name="continent")
     */
    public function index(ContinentRepository $continentRepository, CountryRestApi $countryRestApi): Response
    {

       // dd($countryRestApi->getTestData());
        return $this->render('location/index.html.twig', [
            'locationContinent' => $continentRepository->findAll(),
            //'datas'=>$countryRestApi->getTestData(),
        ]);
    }

    /**
     * Method for display the countries list by continent
     * @Route("continent/{id}", name="detail")
     *
     */
    public function detail(Continent $continent, CountryRestApi $countryRestApi)
    {
        // dd($countryRestApi->countryByContinent($continent->getName()));


        return $this->render('location/countries.html.twig', [
            'continent' => $continent,
            'name' => $continent->getName(),
            'countries' => $continent->getCountries(),
            'datas'=>$countryRestApi->countryByContinent($continent->getName()),
        ]);
    }

    /**
     * Country's details
     * 
     * @Route("continent/country/{name}", name="country")
     *//*
    public function show(CountryRestApi $countryRestApi, $name, Unsplash $picture): Response
    {
      
        //dd($name);   
        //dd($picture);

        return $this->render('location/country.html.twig', [
            'country' => $countryRestApi->fetch($name),
            'picture' => $picture,
            'name'=>$name,
            
        ]);
    }*/

    /**
     * Method for administration administrative information
     * @Route("country/{name}/administratif", name="country_administratif")
     * 
     */
    public function countryAdministratif(CountryRestApi $countryRestApi,CountryRepository $country, $name, Unsplash $picture)
    {

        $picture = $picture->getPicture($name);

        //dump('route ok');
        $detailCountry=$countryRestApi->detailsOfCountry($name);
        //dd($country->findCountryByHisName($name));
        $countryInfo = $country->findCountryByHisName($name);

      //dd($countryRestApi->detailsOfCountry($name));
        return $this->render('location/administratif.html.twig', [
            'country' =>$countryRestApi->fetch($name),
            'name'=>$name,
            'detailCountry'=>$detailCountry,
            'picture' => $picture,
            'countryInfo' => $countryInfo,
        ]);
    }

    /**
     * Current weather for the selected Country
     * @Route("country/{name}/weather", name="country_weather")
     * 
     */
    public function countryWeather(CountryRestApi $country, WeatherRepository $countryWeather, CountryRepository $countryName ,OpenWeather $weather, $name)
    {
        
        //dd($countryName->findWithDetailsDQL($name));
        //dd($weatherDetail->findAll($name));
        //dd($weather->getWeather($name));

        return $this->render('location/weather.html.twig', [
            'country' => $country->fetch($name),
            'countryWeather' => $countryName->findWithDetailsDQL($name),
            'name'=>$name,
            'weather' => $weather->getWeather($name)
        ]);
    }
    
    /**
     * List of materials to be provided
     * @Route("country/{name}/stuff", name="country_stuff")
     *
     * @return void
     */
    public function countryStuff(CountryRestApi $country, $name, StuffRepository $stuffs)
    {
        
         //dd($stuffs);

        return $this->render('location/stuff.html.twig', [
            "country" => $country,
            "name"=>$name,
            "stuffs" => $stuffs,
        ]);
    }

}
