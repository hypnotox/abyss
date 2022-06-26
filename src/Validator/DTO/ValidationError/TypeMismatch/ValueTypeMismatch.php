<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatch;

use HypnoTox\Abyss\Schema\Enum\ValueType;

/**
 * @psalm-immutable
 */
final class ValueTypeMismatch implements ValueTypeMismatchInterface
{
    public function __construct(
        private readonly string $key,
        private readonly ValueType $expectedType,
        private readonly ValueType $actualType,
        private readonly mixed $actual,
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getExpectedType(): ValueType
    {
        return $this->expectedType;
    }

    public function getActualType(): ValueType
    {
        return $this->actualType;
    }

    public function getActual(): mixed
    {
        return $this->actual;
    }

    public function toArray(): array
    {
        return [
            'key'          => $this->key,
            'expectedType' => $this->expectedType,
            'actualValue'  => $this->actual,
            'actualType'   => $this->actualType,
        ];
    }
}
