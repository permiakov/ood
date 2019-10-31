<?php

namespace Permiakov\OOD\Parking\Domain\Vehicle;

class Electric extends Vehicle
{
    public function __construct()
    {
        parent::__construct(VehicleType::ELECTRIC());
    }
}
