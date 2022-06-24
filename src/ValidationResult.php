<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

/**
 * @psalm-immutable
 */
class ValidationResult implements ValidationResultInterface
{
    public function __construct(
        private readonly array $errors,
    ) {
    }

    public function isValid(): bool
    {
        return \count($this->errors) === 0;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
