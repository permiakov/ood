<?php

namespace Permiakov\OOD\Parking\Spot;

use Permiakov\OOD\Parking\Vehicle\Vehicle;

abstract class ParkingSpot
{
    /** @var string */
    protected $number;
    /** @var boolean */
    protected $free;
    /** @var Vehicle */
    protected $vehicle;
    /** @var ParkingSpotType */
    protected $type;

    /**
     * ParkingSpot constructor.
     * @param ParkingSpotType $type
     */
    public function __construct(ParkingSpotType $type)
    {
        $this->type = $type;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function assignVehicle(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
        $this->free = false;
    }

    public function removeVehicle(): void
    {
        $this->vehicle = null;
        $this->free = true;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return bool
     */
    public function isFree(): bool
    {
        return $this->free;
    }

    /**
     * @return ParkingSpotType
     */
    public function getType(): ParkingSpotType
    {
        return $this->type;
    }
}
