<?php

namespace Permiakov\OOD\Test\Parking\Spot;

use Permiakov\OOD\Parking\Spot\ElectricSpot;
use Permiakov\OOD\Parking\Spot\ParkingSpotType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Spot\ElectricSpot
 */
class ElectricSpotTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $object = new ElectricSpot();
        $this->assertEquals(ParkingSpotType::ELECTRIC(), $object->getType());
    }
}
