<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
abstract class BaseTest extends TestCase
{
    protected $backupStaticAttributes = [];
    protected $runTestInSeparateProcess = false;
}
