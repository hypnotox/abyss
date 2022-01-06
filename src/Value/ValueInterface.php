<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Value;

use HypnoTox\Abyss\Type\TypeInterface;

interface ValueInterface
{
    public function getType(): TypeInterface;
}
