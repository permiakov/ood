<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Domain\Vehicle\Car;
use Permiakov\OOD\Parking\Domain\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Vehicle\Car
 */
class CarTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $object = new Car();
        $this->assertEquals(VehicleType::CAR(), $object->getType());
    }
}
