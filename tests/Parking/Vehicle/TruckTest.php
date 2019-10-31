<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Domain\Vehicle\Truck;
use Permiakov\OOD\Parking\Domain\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Vehicle\Truck
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
