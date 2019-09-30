<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Ticket\ParkingTicket;
use Permiakov\OOD\Parking\Vehicle\Vehicle;
use Permiakov\OOD\Parking\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 *
 * @coversDefaultClass \Permiakov\OOD\Parking\Vehicle\Vehicle
 */
class VehicleTest extends TestCase
{
    /**
     * @covers ::getType
     * @covers ::__construct
     */
    public function testConstructor()
    {
        $object = new class (VehicleType::CAR()) extends Vehicle
        {
        };
        $this->assertEquals(VehicleType::CAR(), $object->getType());
    }

    /**
     * @covers ::assignTicket
     * @covers ::getTicket
     */
    public function testAssignTicket()
    {
        $object = new class (VehicleType::CAR()) extends Vehicle
        {
        };
        $ticket = new ParkingTicket();

        $object->assignTicket($ticket);
        $this->assertSame($ticket, $object->getTicket());
    }
}
