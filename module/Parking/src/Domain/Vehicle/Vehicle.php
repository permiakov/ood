<?php

namespace Parking\Vehicle;

use Parking\Domain\Enum\VehicleType;

class Vehicle
{
    /** @var string */
    protected $licenseNumber;
    /** @var VehicleType */
    protected $type;
}