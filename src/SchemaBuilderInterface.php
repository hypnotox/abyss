<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Schema\NodeInterface;

interface SchemaBuilderInterface
{
    /**
     * @return list<NodeInterface>
     */
    public function getSchema(): array;
}
