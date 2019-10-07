<?php

namespace Permiakov\OOD\Parking\Spot;

use MyCLabs\Enum\Enum;

/**
 * @method string HANDICAPPED()
 * @method string COMPACT()
 * @method string LARGE()
 * @method string MOTORBIKE()
 * @method string ELECTRIC()
 */
class ParkingSpotType extends Enum
{
    private const HANDICAPPED = 'handicapped';
    private const COMPACT = 'compact';
    private const LARGE = 'large';
    private const MOTORBIKE = 'motorbike';
    private const ELECTRIC = 'electric';
}
