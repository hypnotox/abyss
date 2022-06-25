<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatch;

use HypnoTox\Abyss\Schema\Enum\ValueType;
use HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatchInterface;

interface ValueTypeMismatchInterface extends TypeMismatchInterface
{
    public function __construct(string $key, ValueType $expectedType, mixed $actual, ValueType $actualType);

    public function getExpectedType(): ValueType;

    public function getActual(): mixed;

    public function getActualType(): ValueType;
}
