<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Constraint\Constrainer;
use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Hydration\Hydrator;
use HypnoTox\Abyss\Schema\SchemaGenerator;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class Abyss implements AbyssInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws ConstraintException
     * @throws \ReflectionException
     */
    public static function map(string $class, array $data): object
    {
        if (false === class_exists($class)) {
            throw new \RuntimeException('Registry not yet implemented');
        }

        $schema = SchemaGenerator::generate($class);

        $constrainer = new Constrainer($schema, $data);
        $constrainer->constrain();

        return Hydrator::hydrate($class, $data);
    }
}
