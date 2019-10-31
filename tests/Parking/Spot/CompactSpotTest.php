<?php

namespace Permiakov\OOD\Test\Parking\Spot;

use Permiakov\OOD\Parking\Domain\Spot\CompactSpot;
use Permiakov\OOD\Parking\Domain\Spot\ParkingSpotType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Spot\CompactSpot
 */
class CompactSpotTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $object = new CompactSpot();
        $this->assertEquals(ParkingSpotType::COMPACT(), $object->getType());
    }
}
