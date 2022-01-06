<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Key;

use HypnoTox\Abyss\Type\TypeInterface;

interface KeyInterface
{
    public function getType(): TypeInterface;
}
