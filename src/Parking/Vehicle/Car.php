<?php

namespace Permiakov\OOD\Parking\Vehicle;


class Car extends Vehicle
{
    public function __construct()
    {
        parent::__construct(VehicleType::CAR());
    }
}