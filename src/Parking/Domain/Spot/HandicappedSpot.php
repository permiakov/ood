<?php

namespace Permiakov\OOD\Parking\Domain\Spot;

class HandicappedSpot extends ParkingSpot
{
    public function __construct()
    {
        parent::__construct(ParkingSpotType::HANDICAPPED());
    }
}
