<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Validator\DTO\ValidationResult;
use HypnoTox\Abyss\Validator\DTO\ValidationResultInterface;

/**
 * @psalm-immutable
 */
final class Validator implements ValidatorInterface
{
    public function __construct(
        private readonly SchemaInterface $schema
    ) {
    }

    public function validate(array $data): ValidationResultInterface
    {
        // TODO: implement validation
        $_schema = $this->schema;

        return new ValidationResult(true);
    }
}
