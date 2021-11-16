<?php

namespace Codium\CleanCode;

use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClient
{

    private $_client ;

    public function __construct() {
        $this->_client = new Client();
    }

    public function get_woeid (string $city)
    {
        return json_decode($this->_client->get("https://www.metaweather.com/api/location/search/?query=$city")->getBody()->getContents(),
            true)[0]['woeid'];
    }    

    public function get_consolidated_weather (string $woeid)
    {
        return json_decode($this->_client->get("https://www.metaweather.com/api/location/$woeid")->getBody()->getContents(),
            true)['consolidated_weather'];
    }   

}