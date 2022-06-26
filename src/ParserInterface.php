<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

interface ParserInterface
{
    /**
     * Parses schema from an array representation.
     */
    public function parse(array $data): SchemaInterface;
}
