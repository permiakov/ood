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
        $test = new class(VehicleType::CAR()) extends Vehicle
        {
        };
        $this->assertEquals(VehicleType::CAR(), $test->getType());
    }

    /**
     * @covers ::assignTicket
     * @covers ::getTicket
     */
    public function testAssignTicket()
    {
        $test = new class(VehicleType::CAR()) extends Vehicle
        {
        };
        $ticket = new ParkingTicket();

        $test->assignTicket($ticket);
        $this->assertSame($ticket, $test->getTicket());
    }
}