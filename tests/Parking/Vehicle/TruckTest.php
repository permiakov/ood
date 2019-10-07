<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Vehicle\Truck;
use Permiakov\OOD\Parking\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Vehicle\Truck
 */
class TruckTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $test = new Truck();
        $this->assertEquals(VehicleType::TRUCK(), $test->getType());
    }
}
