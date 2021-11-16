<?php

namespace Codium\CleanCode;

class Forecast 
{
    private $_client;

    public function __construct(HttpClient $client)
    {
        $this->_client = $client;
    }

    public function predict(string &$city, \DateTime &$datetime = null)
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

        return $results;
    }

    public function isDateOk (string $date, \DateTime $datetime)
    {
        if ($date == $datetime->format('Y-m-d')) {
            return true;
        }

        return false;
    }
}