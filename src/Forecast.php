<?php

require HttpClient;

class Forecast 
{
    private HttpClient $_client ;

    public __constructor(HttpClient $client)
    {
        $this._client = $client
    }

    public function predict(string &$city, \DateTime $datetime = new \DateTime()): string
    {
        // If there are predictions
        if ($datetime >= new \DateTime("+6 days 00:00:00")) {
            return ""
        }

        // Find the id of the city on metawheather
        $woeid = $this._client.get_woeid($city);
        $city = $woeid;

        // Find the predictions for the city
        $results = $this._client.get_consolidated_weather($woeid);

        return $results;
    }

    public function isDateFormatOk (string $date)
    {
        if ($date == $datetime->format('Y-m-d')) {
            return true;
        }

        return false;
    }
}