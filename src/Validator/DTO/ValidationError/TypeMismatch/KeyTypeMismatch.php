<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatch;

use HypnoTox\Abyss\Schema\Enum\KeyType;

/**
 * @psalm-immutable
 */
final class KeyTypeMismatch implements KeyTypeMismatchInterface
{
    public function __construct(
        private readonly string $key,
        private readonly KeyType $expectedType,
        private readonly KeyType $actualType,
        private readonly int|string $actual,
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getExpectedType(): KeyType
    {
        return $this->expectedType;
    }

    public function getActualType(): KeyType
    {
        return $this->actualType;
    }

    public function getActual(): int|string
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
