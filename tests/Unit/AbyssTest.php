<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Abyss\Abyss;
use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use Tests\DTO\AnnotatedSimpleDTO;
use Tests\DTO\SimpleDTO;

/**
 * @internal
 */
final class AbyssTest extends BaseTest
{
    public function testCanMapObjectFromArray(): void
    {
        $dto = Abyss::map(SimpleDTO::class, ['id' => 1, 'name' => 'TEST']);

        $this->assertInstanceOf(SimpleDTO::class, $dto);
        $this->assertSame(1, $dto->id);
        $this->assertSame('TEST', $dto->name);
    }

    public function testThrowsOnConstraintViolation(): void
    {
        $this->expectException(ConstraintException::class);
        $_dto = Abyss::map(SimpleDTO::class, ['id' => 1, 'name' => 123]);
    }

    public function testCanMapUsingAnnotations(): void
    {
        $dto = Abyss::map(AnnotatedSimpleDTO::class, ['id' => 1, 'name' => 'TEST']);

        $this->assertInstanceOf(AnnotatedSimpleDTO::class, $dto);
        $this->assertSame(1, $dto->id);
        $this->assertSame('TEST', $dto->name);
    }

//    public function testThrowsOnConstraintViolationUsingAnnotations(): void
//    {
//        $this->expectException(ConstraintException::class);
//        $_dto = Abyss::map(AnnotatedSimpleDTO::class, ['id' => 1, 'name' => 123]);
//    }
}
