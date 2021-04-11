<?php

namespace Keshavistart\UnitConversions;

class Temparature
{
    public  $celsius;
    public static function forCelsius(float $celsius):self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius) {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
