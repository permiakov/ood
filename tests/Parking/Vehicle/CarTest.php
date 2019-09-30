<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Vehicle\Car;
use Permiakov\OOD\Parking\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Vehicle\Car
 */
class CarTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testCarConstructor()
    {
        $test = new Car();
        $this->assertEquals(VehicleType::CAR(), $test->getType());
    }
}
