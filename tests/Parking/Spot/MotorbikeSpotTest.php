<?php

namespace Permiakov\OOD\Test\Parking\Spot;

use Permiakov\OOD\Parking\Spot\MotorbikeSpot;
use Permiakov\OOD\Parking\Spot\ParkingSpotType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Spot\MotorbikeSpot
 */
class MotorbikeSpotTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $object = new MotorbikeSpot();
        $this->assertEquals(ParkingSpotType::MOTORBIKE(), $object->getType());
    }
}
