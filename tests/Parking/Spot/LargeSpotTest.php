<?php

namespace Permiakov\OOD\Test\Parking\Spot;

use Permiakov\OOD\Parking\Domain\Spot\LargeSpot;
use Permiakov\OOD\Parking\Domain\Spot\ParkingSpotType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Spot\LargeSpot
 */
class LargeSpotTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $object = new LargeSpot();
        $this->assertEquals(ParkingSpotType::LARGE(), $object->getType());
    }
}
