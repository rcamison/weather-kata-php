<?php

interface HttpClient 
{
    public function get_woeid (string $city): string

    public function get_consolidated_weather (string $woeid): string
}