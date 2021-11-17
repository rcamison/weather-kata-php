<?php

namespace Tests\Codium\CleanCode;

use PHPUnit\Framework\TestCase;
use Codium\CleanCode\GuzzleHttpClient;
use Codium\CleanCode\ForecastMetaWeather;

class WeatherTest extends TestCase
{
    // https://www.metaweather.com/api/location/766273/
    /** @test */
    public function find_the_weather_of_today()
    {
        $client = new GuzzleHttpClient();

        $forecast = new ForecastMetaWeather($client);
        $city = "Madrid";

        $prediction = $forecast->predictWeather($city);

        echo "Today: $prediction\n";
        $this->assertTrue(true, 'I don\'t know how to test it');
    }

    /** @test */
    public function find_the_weather_of_any_day()
    {
<<<<<<< Updated upstream

	    $client = new GuzzleHttpClient();    
	    
        $forecast = new ForecastWeather($client);
        $city = "Madrid";

        $prediction = $forecast->predict($city, new \DateTime('+2 days'));
=======
        $client = new GuzzleHttpClient();

        $forecast = new ForecastMetaWeather($client);
        $city = "Madrid";

        $prediction = $forecast->predictWeather($city, new \DateTime('+2 days'));
>>>>>>> Stashed changes

        echo "Day after tomorrow: $prediction\n";
        $this->assertTrue(true, 'I don\'t know how to test it');
    }

    /** @test */
    public function find_the_wind_of_any_day()
    {
<<<<<<< Updated upstream

        $client = new GuzzleHttpClient();
            
        $forecast = new ForecastWeather($client);
        $city = "Madrid";

        $noDate = null;

        $prediction = $forecast->predict($city, $noDate);
=======
        $client = new GuzzleHttpClient();

        $forecast = new ForecastMetaWeather($client);
        $city = "Madrid";

        $prediction = $forecast->predictWind($city, null);
>>>>>>> Stashed changes

        echo "Wind: $prediction\n";
        $this->assertTrue(true, 'I don\'t know how to test it');
    }

    /** @test */
    public function change_the_city_to_woeid()
    {
<<<<<<< Updated upstream

        $client = new GuzzleHttpClient();

        $forecast = new ForecastWeather($client);
        $city = "Madrid";

        $noDate = null;

        $forecast->predict($city, $noDate);

        echo "Validation City to Woeid Complete\n";
=======
        $client = new GuzzleHttpClient();

        $forecast = new ForecastMetaWeather($client);
        $city = "Madrid";

        $forecast->predictWind($city, null);

>>>>>>> Stashed changes
        $this->assertEquals("766273", $city);
    }

    /** @test */
    public function there_is_no_prediction_for_more_than_5_days()
    {
<<<<<<< Updated upstream

        $client = new GuzzleHttpClient();

        $forecast = new ForecastWeather();
        $city = "Madrid";

        $prediction = $forecast->predict($city, new \DateTime('+6 days'));

        echo "No Prediction > 5 Days \n";
        $this->assertEquals("", $prediction);
    }

=======
        $client = new GuzzleHttpClient();

        $forecast = new ForecastMetaWeather($client);
        $city = "Madrid";

        $prediction = $forecast->predictWeather($city, new \DateTime('+6 days'));

        $this->assertEquals("", $prediction);
    }
>>>>>>> Stashed changes
}