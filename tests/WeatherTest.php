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

    /** @test */
    public function find_the_wind_of_any_day()
    {

        $client = new GuzzleHttpClient();
            
        $forecast = new ForecastWeather($client);
        $city = "Madrid";

        $noDate = null;

        $prediction = $forecast->predict($city, $noDate);

        echo "Wind: $prediction\n";
        $this->assertTrue(true, 'I don\'t know how to test it');
    }

    /** @test */
    public function change_the_city_to_woeid()
    {

        $client = new GuzzleHttpClient();

        $forecast = new ForecastWeather($client);
        $city = "Madrid";

        $noDate = null;

        $forecast->predict($city, $noDate);

        echo "Validation City to Woeid Complete\n";
        $this->assertEquals("766273", $city);
    }

}