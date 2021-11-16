<?php

namespace Codium\CleanCode;

interface HttpClient 
{
    public function get_woeid (string $city);

    public function get_consolidated_weather (string $woeid);
}