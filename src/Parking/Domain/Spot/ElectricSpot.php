<?php

namespace Permiakov\OOD\Parking\Domain\Spot;

class ElectricSpot extends ParkingSpot
{
    public function __construct()
    {
        parent::__construct(ParkingSpotType::ELECTRIC());
    }
}
