<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Vehicle\VehicleType
 */
class VehicleTypeTest extends TestCase
{
    /**
     * @covers \Permiakov\OOD\Parking\Vehicle\VehicleType
     */
    public function testVehicleTypesAreOnThePlace()
    {
        $this->assertEquals(['CAR', 'TRUCK', 'ELECTRIC', 'VAN', 'MOTORBIKE'], VehicleType::keys());
    }
}
