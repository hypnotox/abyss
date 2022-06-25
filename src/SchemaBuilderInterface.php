<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

/**
 * Builds schema, parsing it from an array representation and/or using the building methods.
 *
 * @psalm-immutable
 */
interface SchemaBuilderInterface
{
    public function __construct(SchemaInterface $schema = new Schema());

    /**
     * Parses schema from an array representation.
     */
    public static function fromArray(array $data): self;

    /**
     * Returns current schema.
     */
    public function getSchema(): SchemaInterface;

    // TODO: define building methods
}
