<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Vehicle\Electric;
use Permiakov\OOD\Parking\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Vehicle\Electric
 */
class ElectricTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $test = new Electric();
        $this->assertEquals(VehicleType::ELECTRIC(), $test->getType());
    }
}
