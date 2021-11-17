<?php

namespace Codium\CleanCode;

inteface Forecast 
{
    public function predictWeather(string &$city, \DateTime $datetime = null);

    public function predictWind(string &$city, \DateTime $datetime = null);
}