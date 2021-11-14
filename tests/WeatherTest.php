<?php

namespace Tests\Codium\CleanCode;

require HttpClient;

use Codium\CleanCode\Forecast;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class WeatherTest extends TestCase
{
    // https://www.metaweather.com/api/location/766273/
    /** @test */
    public function find_the_weather_of_today()
    {
        HttpClient $client = new Client();

        $forecast = new Forecast($client);
        $city = "Madrid";

        $prediction = $forecast->predict($city);

        echo "Today: $prediction\n";
        $this->assertTrue(true, 'I don\'t know how to test it');
    }

}