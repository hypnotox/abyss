<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Type;

interface TypeInterface
{
    public function isValueInstanceOfType(mixed $value): bool;
}
