<?php

namespace Permiakov\OOD\Parking\Domain\Spot;

class LargeSpot extends ParkingSpot
{
    public function __construct()
    {
        parent::__construct(ParkingSpotType::LARGE());
    }
}
