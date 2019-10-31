<?php

namespace Permiakov\OOD\Parking\Domain\Vehicle;

class Car extends Vehicle
{
    public function __construct()
    {
        parent::__construct(VehicleType::CAR());
    }
}
