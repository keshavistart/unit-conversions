<?php

namespace Keshavistart\UnitConversions;

class Weight
{
    private $kilogram;

    public static function fromKilograms(float $kilogram)
    {
        return new static($kilogram);
    }

    public function __construct(float $kilogram)
    {
        $this->kilogram = $kilogram;
    }

    public function toLbs(): float
    {
        return $this->kilogram * 2.204623;
    }
}
