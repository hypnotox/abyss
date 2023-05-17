<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Constraint\Constrainer;
use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Hydration\Hydrator;
use HypnoTox\Abyss\Schema\SchemaGenerator;

/**
 * @psalm-immutable
 */
final class Abyss
{
    /**
     * @param class-string|string $class
     *
     * @throws ConstraintException
     * @throws \ReflectionException
     */
    public static function map(string $class, array $data): object
    {
        if (false === class_exists($class)) {
            throw new \RuntimeException('Registry not yet implemented');
        }

        $schemaGenerator = new SchemaGenerator();
        $schema = $schemaGenerator->generate($class);
        (new Constrainer($schema))->constrain($data);

        return (new Hydrator(
            $schema,
            $data,
        ))->hydrate();
    }
}
