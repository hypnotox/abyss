<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Abyss\Schema;

/**
 * @internal
 */
final class SchemaInterfaceTest extends BaseTest
{
    /**
     * @doesNotPerformAssertions
     */
    public function testConstruct(): void
    {
        $_emptySchema = new Schema();
        $_emptyArraySchema = new Schema([]);
        $_schema = new Schema(
            [
                new Schema\Node(
                    Schema\Enum\KeyType::INT,
                    Schema\Enum\ValueType::ARRAY
                ),
            ]
        );
    }

    public function testGetNodes(): void
    {
        $emptySchema = new Schema();
        $emptyArraySchema = new Schema([]);
        $schema = new Schema(
            [
                new Schema\Node(
                    Schema\Enum\KeyType::INT,
                    Schema\Enum\ValueType::ARRAY
                ),
            ]
        );

        $this->assertCount(0, $emptySchema->getNodes());
        $this->assertCount(0, $emptyArraySchema->getNodes());
        $this->assertCount(1, $schema->getNodes());
    }
}
