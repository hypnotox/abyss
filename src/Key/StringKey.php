<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Key;

use HypnoTox\Abyss\Type\StringType;
use HypnoTox\Abyss\Type\TypeInterface;

class StringKey implements KeyInterface
{
    public function getType(): TypeInterface
    {
        return new StringType();
    }
}
