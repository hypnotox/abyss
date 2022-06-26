<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatch;

use HypnoTox\Abyss\Schema\Enum\ValueType;
use HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatchInterface;

/**
 * @psalm-immutable
 */
interface ValueTypeMismatchInterface extends TypeMismatchInterface
{
    public function __construct(string $key, ValueType $expectedType, ValueType $actualType, mixed $actual);

    public function getExpectedType(): ValueType;

    public function getActualType(): ValueType;

    public function getActual(): mixed;
}
