<?php

use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClient
{

    Client $_client ;

    public __constructor(Client $client) {
        $this._client = new Client();
    }

    public function get_woeid (string $city):string
    {
        return json_decode($this._client->get("https://www.metaweather.com/api/location/search/?query=$city")->getBody()->getContents(),
            true)[0]['woeid'];
    }    

    public function get_consolidated_weather (string $woeid):string
    {
        return json_decode($this._client->get("https://www.metaweather.com/api/location/$woeid")->getBody()->getContents(),
            true)['consolidated_weather'];
    }   

}