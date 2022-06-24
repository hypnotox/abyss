<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema\Enum;

enum ValueType: string
{
    case INT = 'int';
    case STRING = 'string';
    case ARRAY = 'array';
    case OBJECT = 'object';
}
