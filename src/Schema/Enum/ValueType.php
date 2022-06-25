<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema\Enum;

/**
 * Enum representing all possible value types and their string representation.
 */
enum ValueType: string
{
    case INT = 'int';
    case STRING = 'string';
    case ARRAY = 'array';
    case OBJECT = 'object';
}
