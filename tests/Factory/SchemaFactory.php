<?php

declare(strict_types=1);

namespace Tests\Factory;

use HypnoTox\Abyss\Schema;
use Tests\DTO\SchemaDTO;

/**
 * @internal
 */
final class SchemaFactory
{
    public function make(): SchemaDTO
    {
        $schema = new Schema();
        $data = [];

        // TODO: implement schema factory

        return new SchemaDTO(
            $schema,
            $data,
        );
    }

    public function makeEmpty(): SchemaDTO
    {
        return new SchemaDTO(
            new Schema(),
            [],
        );
    }
}
