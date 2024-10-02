<?php

declare(strict_types=1);

namespace Zodimo\BaseReturnTest;

use PHPUnit\Framework\MockObject\MockObject;

/**
 * @phpstan-require-extends \PHPUnit\Framework\TestCase
 */
trait MockClosureTrait
{
    /**
     * @return callable&MockObject $mockClosure
     */
    public function createClosureMock()
    {
        return $this->createMock(CallableMock::class);
    }

    /**
     * @return callable&MockObject $mockClosure
     */
    public function createClosureNotCalled()
    {
        $closure = $this->createClosureMock();
        $closure->expects($this->never())->method('__invoke');

        return $closure;
    }
}
