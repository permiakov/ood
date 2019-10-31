<?php

namespace Permiakov\OOD\Test\Parking\Vehicle;

use Permiakov\OOD\Parking\Domain\Ticket\ParkingTicket;
use Permiakov\OOD\Parking\Domain\Vehicle\Vehicle;
use Permiakov\OOD\Parking\Domain\Vehicle\VehicleType;
use PHPUnit\Framework\TestCase;

/**
 *
 * @coversDefaultClass \Permiakov\OOD\Parking\Domain\Vehicle\Vehicle
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
