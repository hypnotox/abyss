<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO;

use HypnoTox\Abyss\ValidatorInterface;

/**
 * DTO holding validation results.
 *
 * @see ValidatorInterface
 *
 * @psalm-immutable
 */
interface ValidationResultInterface
{
    /**
     * @param list<ValidationErrorInterface> $errors list of encountered validation errors
     */
    public function __construct(bool $isValid, array $errors = []);

    /**
     * @return bool if the given array adheres to the schema
     */
    public function isValid(): bool;

    /**
     * @return list<ValidationErrorInterface> list of encountered validation errors
     */
    public function getErrors(): array;
}
