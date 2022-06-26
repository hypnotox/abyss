<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Schema\NodeInterface;

final class Parser implements ParserInterface
{
    public function parse(array $data): SchemaInterface
    {
        // TODO: implement parsing
        /** @var list<NodeInterface> $nodes */
        $nodes = $data;

        return new Schema($nodes);
    }
}
