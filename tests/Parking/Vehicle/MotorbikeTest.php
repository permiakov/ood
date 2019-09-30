<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Vehicle\Motorbike;
use Permiakov\OOD\Parking\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Vehicle\Motorbike
 */
class MotorbikeTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testCarConstructor()
    {
        $test = new Motorbike();
        $this->assertEquals(VehicleType::MOTORBIKE(), $test->getType());
    }
}
