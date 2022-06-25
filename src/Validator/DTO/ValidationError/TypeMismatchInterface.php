<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO\ValidationError;

use HypnoTox\Abyss\Schema\Enum\KeyType;
use HypnoTox\Abyss\Schema\Enum\ValueType;
use HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatch\KeyTypeMismatchInterface;
use HypnoTox\Abyss\Validator\DTO\ValidationError\TypeMismatch\ValueTypeMismatchInterface;
use HypnoTox\Abyss\Validator\DTO\ValidationErrorInterface;

/**
 * Parent interface for type mismatch errors.
 *
 * @see KeyTypeMismatchInterface
 * @see ValueTypeMismatchInterface
 */
interface TypeMismatchInterface extends ValidationErrorInterface
{
    public function getKey(): string;

    public function getExpectedType(): KeyType|ValueType;

    public function getActual(): mixed;

    public function getActualType(): KeyType|ValueType;
}
