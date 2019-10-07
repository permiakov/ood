<?php

namespace Permiakov\OOD\Parking\Spot;

class ElectricSpot extends ParkingSpot
{
    public function __construct()
    {
        parent::__construct(ParkingSpotType::ELECTRIC());
    }
}
