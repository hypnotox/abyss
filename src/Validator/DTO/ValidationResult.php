<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO;

/**
 * @psalm-immutable
 */
final class ValidationResult implements ValidationResultInterface
{
    /**
     * @param list<ValidationErrorInterface> $errors list of encountered validation errors
     */
    public function __construct(
        private readonly bool $isValid,
        private readonly array $errors = [],
    ) {
    }

    public function isValid(): bool
    {
        return $this->isValid;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
