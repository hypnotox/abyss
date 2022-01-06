<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Value;

use HypnoTox\Abyss\Type\StringType;
use HypnoTox\Abyss\Type\TypeInterface;

class StringValue implements ValueInterface
{
    public function getType(): TypeInterface
    {
        return new StringType();
    }
}
