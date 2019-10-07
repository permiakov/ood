<?php

namespace Permiakov\OOD\Test\Parking\Spot;

use Permiakov\OOD\Parking\Spot\HandicappedSpot;
use Permiakov\OOD\Parking\Spot\ParkingSpotType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Spot\HandicappedSpot
 */
class HandicappedSpotTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $object = new HandicappedSpot();
        $this->assertEquals(ParkingSpotType::HANDICAPPED(), $object->getType());
    }
}
