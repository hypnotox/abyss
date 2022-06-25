<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatch;

use HypnoTox\Abyss\Schema\Enum\KeyType;
use HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatchInterface;

interface KeyTypeMismatchInterface extends TypeMismatchInterface
{
    public function __construct(string $key, KeyType $expectedType, mixed $actual, KeyType $actualType);

    public function getExpectedType(): KeyType;

    public function getActual(): int|string;

    public function getActualType(): KeyType;
}
