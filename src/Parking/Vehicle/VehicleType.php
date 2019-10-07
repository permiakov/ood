<?php

namespace Permiakov\OOD\Parking\Vehicle;

use MyCLabs\Enum\Enum;

/**
 * @method string CAR()
 * @method string TRUCK()
 * @method string ELECTRIC()
 * @method string VAN()
 * @method string MOTORBIKE()
 */
class VehicleType extends Enum
{
    private const CAR = 'car';
    private const TRUCK = 'truck';
    private const ELECTRIC = 'electric';
    private const VAN = 'van';
    private const MOTORBIKE = 'motorbike';
}
