<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Hydration;

use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Schema\Node\NodeInterface;
use HypnoTox\Abyss\Schema\Schema;

/**
 * {@inheritDoc}
 */
final class Hydrator implements HydratorInterface
{
    public function __construct(
        private readonly Schema $schema,
        private readonly array $data,
    ) {
    }

    /**
     * @throws \ReflectionException
     */
    public function hydrate(): object
    {
        $object = (new \ReflectionClass($this->schema->getClass()))->newInstanceWithoutConstructor();
        $reflectionObject = new \ReflectionObject($object);
        // TODO: implement more elaborate assignment process according to expected type and whatnot

        /** @psalm-var mixed $value */
        foreach ($this->data as $property => $value) {
            $reflectionObject->getProperty((string) $property)->setValue($object, $value);
        }

        return $object;
    }
}
