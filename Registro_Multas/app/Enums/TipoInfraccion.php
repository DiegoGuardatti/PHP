<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;
use PhpOption\Option;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TipoInfraccion extends Enum
{   
    const OptionOne = 'Alta Velocidad';
    const OptionTwo = 'Doble Fila';
    const OptionThree = 'Alcoholemia';
    const OptionFour= 'Falta de Documentacion';
}
