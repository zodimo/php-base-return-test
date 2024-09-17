<?php

declare(strict_types=1);

namespace Zodimo\BaseReturnTest\Tests;

use PHPUnit\Framework\TestCase;
use Zodimo\BaseReturnTest\MockClosureTrait;

/**
 * @internal
 *
 * @coversNothing
 */
class MockClosureTraitTest extends TestCase
{
    use MockClosureTrait;

    public function testMockClosure(): void
    {
        $closure = $this->createClosureMock();

        $closure->expects($this->once())->method('__invoke')->with(10)->willReturn(20);

        $this->assertEquals(20, $closure(10));
    }

    public function testMockNotCalled(): void
    {
        $closure = $this->createClosureNotCalled();
        $this->assertFalse(false);
    }
}
