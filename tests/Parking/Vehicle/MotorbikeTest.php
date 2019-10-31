<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Domain\Vehicle\Motorbike;
use Permiakov\OOD\Parking\Domain\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Vehicle\Motorbike
 */
class MotorbikeTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $test = new Motorbike();
        $this->assertEquals(VehicleType::MOTORBIKE(), $test->getType());
    }
}
