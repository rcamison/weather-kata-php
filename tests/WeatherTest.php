<?php

namespace Tests\Codium\CleanCode;

use Codium\CleanCode\ForecastWeather;
use PHPUnit\Framework\TestCase;
use Codium\CleanCode\GuzzleHttpClient;

class WeatherTest extends TestCase
{
    // https://www.metaweather.com/api/location/766273/
    /** @test */
    public function find_the_weather_of_today()
    {
        $client = new GuzzleHttpClient();

        $forecast = new ForecastWeather($client);
        $city = "Madrid";

        $prediction = $forecast->predict($city);

        echo "Today: $prediction\n";
        $this->assertTrue(true, 'I don\'t know how to test it');
    }

}