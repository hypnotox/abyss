<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Validator\DTO\ValidationResultInterface;

/**
 * Validates arrays against a schema.
 *
 * @see SchemaInterface
 * @see SchemaBuilderInterface
 *
 * @psalm-immutable
 */
interface ValidatorInterface
{
    // TODO: implement ability to report on first find or all issues

    /**
     * @param SchemaInterface $schema schema to validate against
     */
    public function __construct(SchemaInterface $schema);

    /**
     * @param array $data array to validate
     */
    public function validate(array $data): ValidationResultInterface;
}
