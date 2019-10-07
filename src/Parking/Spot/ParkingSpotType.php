<?php

namespace Permiakov\OOD\Parking\Spot;

use MyCLabs\Enum\Enum;

class ParkingSpotType extends Enum
{
    private const HANDICAPPED = 'handicapped';
    private const COMPACT = 'compact';
    private const LARGE = 'large';
    private const MOTORBIKE = 'motorbike';
    private const ELECTRIC = 'electric';
}
