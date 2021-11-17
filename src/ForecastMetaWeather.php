<?php

namespace Codium\CleanCode;

class ForecastMetaWeather implements Forecast
{
    private $http_client;

    public function __construct(HttpClient $client)
    {
        $this->http_client = $client;
    }

    public function predictWeather(string &$city, \DateTime $datetime = null)
    {
        $result = getPredictionByCity($city, $datetime);
        return $result['weather_state_name'];
    }

    public function predictWind(string &$city, \DateTime $datetime = null)
    {
        $result = getPredictionByCity($city, $datetime);
        return $result['wind_speed'];
    }

    public function getPredictionByCity (string &$city, \DateTime $datetime = null)
    {
        if (!$datetime) {
            $datetime = new \DateTime();
        }

        // If there are predictions
        if ($datetime >= new \DateTime("+6 days 00:00:00")) {
             return "";
        }

        // Find the id of the city on metawheather
        $woeid = $this->_client->get_woeid($city);
        $city = $woeid;

        // Find the predictions for the city
        $results = $this->_client->get_consolidated_weather($woeid);

        foreach ($results as $result) {
            if ($prediction["applicable_date"] == $datetime->format('Y-m-d')) {
                return $prediction;
            }
        }

    }

}
