<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Abyss\SchemaBuilder;
use HypnoTox\Abyss\SchemaBuilderInterface;

/**
 * @internal
 */
class SchemaTest extends BaseTest
{
    public function testCanInstantiate(): void
    {
        $schemaBuilder = new SchemaBuilder();

        $this->assertInstanceOf(SchemaBuilderInterface::class, $schemaBuilder);
    }
}
