<?php

namespace Permiakov\OOD\Parking\Vehicle;

class Van extends Vehicle
{
    public function __construct()
    {
        parent::__construct(VehicleType::VAN());
    }
}
