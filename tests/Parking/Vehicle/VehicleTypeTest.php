<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Domain\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Vehicle\VehicleType
 */
class VehicleTypeTest extends TestCase
{
    /**
     * @covers \Permiakov\OOD\Parking\Domain\Vehicle\VehicleType
     */
    public function testVehicleTypesAreOnThePlace()
    {
        $this->assertEquals(['CAR', 'TRUCK', 'ELECTRIC', 'VAN', 'MOTORBIKE'], VehicleType::keys());
    }
}
