<?php

namespace Keshavistart\UnitConversions\Tests;

use Keshavistart\UnitConversions\Temparature;
use Keshavistart\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class TemparatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $lbs = Temparature::forCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $lbs);
    }
}
