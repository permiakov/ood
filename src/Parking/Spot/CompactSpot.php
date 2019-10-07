<?php

namespace Permiakov\OOD\Parking\Spot;

class CompactSpot extends ParkingSpot
{
    public function __construct()
    {
        parent::__construct(ParkingSpotType::COMPACT());
    }
}
