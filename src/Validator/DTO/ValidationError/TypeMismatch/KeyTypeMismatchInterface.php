<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatch;

use HypnoTox\Abyss\Schema\Enum\KeyType;
use HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatchInterface;

/**
 * @psalm-immutable
 */
interface KeyTypeMismatchInterface extends TypeMismatchInterface
{
    public function __construct(string $key, KeyType $expectedType, KeyType $actualType, int|string $actual);

    public function getExpectedType(): KeyType;

    public function getActualType(): KeyType;

    public function getActual(): int|string;
}
