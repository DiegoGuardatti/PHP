<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TipoAuto extends Enum
{
    const OptionOne = 'Standar';
    const OptionTwo = 'Suv';
    const OptionThree = 'Camioneta';
    const OptionFour = 'Camión';
}
