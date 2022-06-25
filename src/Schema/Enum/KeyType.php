<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema\Enum;

/**
 * Enum representing all possible key types and their string representation.
 */
enum KeyType: string
{
    case INT = 'int';
    case STRING = 'string';
}
