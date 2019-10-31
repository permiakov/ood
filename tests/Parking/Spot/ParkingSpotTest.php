<?php

namespace Permiakov\OOD\Test\Parking\Spot;

use Permiakov\OOD\Parking\Domain\Spot\ParkingSpot;
use Permiakov\OOD\Parking\Domain\Spot\ParkingSpotType;
use Permiakov\OOD\Parking\Domain\Vehicle\Car;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Spot\ParkingSpot
 */
class ParkingSpotTest extends TestCase
{
    /**
     * @covers ::getType
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $object = new class (ParkingSpotType::COMPACT()) extends ParkingSpot
        {
        };
        $this->assertEquals(ParkingSpotType::COMPACT(), $object->getType());
    }

    /**
     * @covers ::assignVehicle
     * @covers ::isFree
     */
    public function testAssignVehicle()
    {
        $object = new class (ParkingSpotType::COMPACT()) extends ParkingSpot
        {
        };
        $car = new Car();

        $object->assignVehicle($car);
        $prop = new \ReflectionProperty($object, 'vehicle');
        $prop->setAccessible(true);
        $this->assertEquals($car, $prop->getValue($object));
        $this->assertFalse($object->isFree());
    }

    /**
     * @covers ::removeVehicle
     * @covers ::isFree
     */
    public function testRemoveVehicle()
    {
        $object = new class (ParkingSpotType::COMPACT()) extends ParkingSpot
        {
        };
        $car = new Car();

        $object->assignVehicle($car);
        $object->removeVehicle();
        $prop = new \ReflectionProperty($object, 'vehicle');
        $prop->setAccessible(true);
        $this->assertEquals(null, $prop->getValue($object));
        $this->assertTrue($object->isFree());
    }

    /**
     * @covers ::getNumber
     * @covers ::setNumber
     */
    public function testGetSetNumberMethods()
    {

        $object = new class (ParkingSpotType::COMPACT()) extends ParkingSpot
        {
        };
        $object->setNumber('Mon 7 Oct');
        $this->assertEquals('Mon 7 Oct', $object->getNumber());
    }
}
