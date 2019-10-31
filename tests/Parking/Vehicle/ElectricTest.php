<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Domain\Vehicle\Electric;
use Permiakov\OOD\Parking\Domain\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Vehicle\Electric
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
