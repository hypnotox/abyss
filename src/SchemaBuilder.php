<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class SchemaBuilder implements SchemaBuilderInterface
{
    public function __construct(
        private readonly SchemaInterface $schema = new Schema(),
    ) {
    }

    public function getSchema(): SchemaInterface
    {
        return $this->schema;
    }
}
