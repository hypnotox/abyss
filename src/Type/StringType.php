<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Type;

class StringType implements TypeInterface
{
    public function isValueInstanceOfType(mixed $value): bool
    {
        return \is_string($value);
    }
}
