<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint\Enum;

/**
 * Enum representing all possible value types and their string representation.
 */
enum Type: string
{
    case INT = 'int';
    case STRING = 'string';
    case LIST = 'list';
    case ARRAY = 'array';
    case OBJECT = 'object';
    case SCHEMA = 'schema';
}
