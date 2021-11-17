<?php

namespace Codium\CleanCode;

class ForecastWeather extends Forecast
{
    public function predict(string &$city, \DateTime &$datetime = null): string
    {

        if ($datetime > new \DateTime("+6 days 00:00:00")) {
            return "";
        }

        $results = parent::predict($city,$datetime);

        foreach ($results as $result) {
            //            if (parent::isDateOk($result["applicable_date"],$datetime)) {
            if ($result["applicable_date"] == $datetime->format('Y-m-d'))
                return $result['weather_state_name'];
            }
    }
}
