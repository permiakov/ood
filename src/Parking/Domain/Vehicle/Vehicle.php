<?php

namespace Permiakov\OOD\Parking\Domain\Vehicle;

use Permiakov\OOD\Parking\Domain\Ticket\ParkingTicket;

abstract class Vehicle
{
    /** @var string */
    protected $licenseNumber;
    /** @var VehicleType */
    protected $type;
    /** @var ParkingTicket */
    protected $ticket;

    /**
     * Vehicle constructor.
     * @param VehicleType $type
     */
    public function __construct(VehicleType $type)
    {
        $this->type = $type;
    }

    /**
     * @param ParkingTicket $ticket
     */
    public function assignTicket(ParkingTicket $ticket): void
    {
        $this->ticket = $ticket;
    }

    /**
     * @return VehicleType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return ParkingTicket
     */
    public function getTicket()
    {
        return $this->ticket;
    }
}
