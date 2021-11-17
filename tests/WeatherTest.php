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

    /** @test */
    public function find_the_weather_of_any_day()
    {
        $client = new GuzzleHttpClient();

        $forecast = new ForecastWeather($client);
        $city = "Madrid";

        $prediction = $forecast->predict($city, new \DateTime('+2 days'));

        echo "Day after tomorrow: $prediction\n";
        $this->assertTrue(true, 'I don\'t know how to test it');
    }

}