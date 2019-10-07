<?php

namespace Permiakov\OOD\Parking\Spot;

class HandicappedSpot extends ParkingSpot
{
    public function __construct()
    {
        parent::__construct(ParkingSpotType::HANDICAPPED());
    }
}
