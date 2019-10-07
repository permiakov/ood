<?php

namespace Permiakov\OOD\Parking\Spot;

class MotorbikeSpot extends ParkingSpot
{
    public function __construct()
    {
        parent::__construct(ParkingSpotType::MOTORBIKE());
    }
}
