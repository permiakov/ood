<?php

namespace Permiakov\OOD\Parking\Vehicle;

use MyCLabs\Enum\Enum;

class VehicleType extends Enum
{
    private const CAR = 'car';
    private const TRUCK = 'truck';
    private const ELECTRIC = 'electric';
    private const VAN = 'van';
    private const MOTORBIKE = 'motorbike';
}