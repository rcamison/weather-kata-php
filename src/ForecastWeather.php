<?php

namespace Codium\CleanCode;

class ForecastWeather extends Forecast
{
    public function predict(string &$city, \DateTime $datetime = new \DateTime()): string
    {
        $results = parent::predict($city,$datetime);

        foreach ($results as $result) {
            if (isDateFormatOk($result["applicable_date"])) {
                return $result['weather_state_name'];
            }
        }
    }

}