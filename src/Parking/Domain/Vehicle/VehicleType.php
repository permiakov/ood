<?php

namespace Permiakov\OOD\Parking\Domain\Vehicle;

use MyCLabs\Enum\Enum;

/**
 * @method static string CAR()
 * @method static string TRUCK()
 * @method static string ELECTRIC()
 * @method static string VAN()
 * @method static string MOTORBIKE()
 */
class VehicleType extends Enum
{
    private const CAR = 'car';
    private const TRUCK = 'truck';
    private const ELECTRIC = 'electric';
    private const VAN = 'van';
    private const MOTORBIKE = 'motorbike';
}
