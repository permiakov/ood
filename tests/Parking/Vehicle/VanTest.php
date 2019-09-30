<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Vehicle\Van;
use Permiakov\OOD\Parking\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Vehicle\Van
 */
class VanTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testCarConstructor()
    {
        $test = new Van();
        $this->assertEquals(VehicleType::VAN(), $test->getType());
    }
}
