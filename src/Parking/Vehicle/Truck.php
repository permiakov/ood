<?php

namespace Permiakov\OOD\Parking\Vehicle;

class Truck extends Vehicle
{
    public function __construct()
    {
        parent::__construct(VehicleType::TRUCK());
    }
}
