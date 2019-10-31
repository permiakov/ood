<?php

namespace Permiakov\OOD\Parking\Domain\Spot;

class MotorbikeSpot extends ParkingSpot
{
    public function __construct()
    {
        parent::__construct(ParkingSpotType::MOTORBIKE());
    }
}
