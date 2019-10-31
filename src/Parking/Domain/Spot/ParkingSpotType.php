<?php

namespace Permiakov\OOD\Parking\Domain\Spot;

use MyCLabs\Enum\Enum;

/**
 * @method static string HANDICAPPED()
 * @method static string COMPACT()
 * @method static string LARGE()
 * @method static string MOTORBIKE()
 * @method static string ELECTRIC()
 */
class ParkingSpotType extends Enum
{
    private const HANDICAPPED = 'handicapped';
    private const COMPACT = 'compact';
    private const LARGE = 'large';
    private const MOTORBIKE = 'motorbike';
    private const ELECTRIC = 'electric';
}
