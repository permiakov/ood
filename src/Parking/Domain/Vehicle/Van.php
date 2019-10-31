<?php

namespace Permiakov\OOD\Parking\Domain\Vehicle;

class Van extends Vehicle
{
    public function __construct()
    {
        parent::__construct(VehicleType::VAN());
    }
}
