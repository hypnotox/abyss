<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint;

use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Schema\Node\NodeInterface;
use HypnoTox\Abyss\Schema\Schema;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class Constrainer implements ConstrainerInterface
{
    public function __construct(
        private readonly Schema $schema,
        private readonly array $data,
    ) {
    }

    public function constrain(): void
    {
        // TODO: implement validating data structure according to schema
        $this->recursiveConstrain($this->schema->getNodes());
    }

    /**
     * @param list<NodeInterface> $nodes
     *
     * @throws ConstraintException
     */
    private function recursiveConstrain(array $nodes): void
    {
        $children = [];

        foreach ($nodes as $node) {
            /** @psalm-var mixed $value */
            $value = $node->getValueFromData($this->data);

            foreach ($node->getConstraints() as $constraint) {
                $constraint->constrain($value, $node);
            }

            $children[] = $node->getChildren();
        }

        $children = array_merge(...$children);

        if (\count($children) > 0) {
            $this->recursiveConstrain($children);
        }
    }
}
