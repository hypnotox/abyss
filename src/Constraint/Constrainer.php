<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint;

use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Schema\Schema;

final class Constrainer implements ConstrainerInterface
{
    public function __construct(
        private readonly Schema $schema,
    ) {
    }

    /**
     * @throws ConstraintException
     */
    public function constrain(array $data): void
    {
        $nodes = $this->schema->getNodes();
        $children = [];

        foreach ($nodes as $node) {
            /** @psalm-var mixed $value */
            $value = $node->getValueFromData($data);

            foreach ($node->getConstraints() as $constraint) {
                $constraint->constrain($value, $node);
            }

            $children[] = $node->getChildren();
        }

        $children = array_merge(...$children);

        if (\count($children) > 0) {
            $this->constrain($children);
        }
    }
}
