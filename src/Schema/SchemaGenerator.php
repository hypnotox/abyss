<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

use HypnoTox\Abyss\Constraint\Config\TypeConstraintConfig;
use HypnoTox\Abyss\Constraint\Enum\Type;
use HypnoTox\Abyss\Constraint\TypeConstraint;
use HypnoTox\Abyss\Schema\Node\Node;

/**
 * {@inheritDoc}
 */
final class SchemaGenerator implements SchemaGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws \ReflectionException
     */
    public function generate(string $class): Schema
    {
        $nodes = [];
        $reflectionClass = new \ReflectionClass($class);

        foreach ($reflectionClass->getProperties() as $property) {
            $reflectionType = $property->getType();

            if (null === $reflectionType) {
                continue;
            }

            $types = [];

            if ($reflectionType instanceof \ReflectionNamedType) {
                $type = $reflectionType->getName();
                $types[] = $type;
            }

            $typeConstraintConfigs = [];

            foreach ($types as $type) {
                $typeConstraintConfigs[] = new TypeConstraintConfig(Type::from($type));
            }

            $nodes[] = new Node(
                $property->getName(),
                [new TypeConstraint($typeConstraintConfigs)]
            );
        }

        return new Schema($class, $nodes);
    }
}
