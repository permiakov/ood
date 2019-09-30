<?php

namespace Permiakov\OOD\Parking\Vehicle;

class Motorbike extends Vehicle
{
    public function __construct()
    {
        parent::__construct(VehicleType::MOTORBIKE());
    }
}
