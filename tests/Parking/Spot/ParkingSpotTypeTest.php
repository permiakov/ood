<?php

namespace Permiakov\OOD\Test\Parking\Spot;

use Permiakov\OOD\Parking\Domain\Spot\ParkingSpotType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Spot\ParkingSpotType
 */
class ParkingSpotTypeTest extends TestCase
{
    /**
     * @covers \Permiakov\OOD\Parking\Domain\Spot\ParkingSpotType
     */
    public function testTypesAreOnThePlace()
    {
        $this->assertEquals(['HANDICAPPED', 'COMPACT', 'LARGE', 'MOTORBIKE', 'ELECTRIC'], ParkingSpotType::keys());
    }
}
