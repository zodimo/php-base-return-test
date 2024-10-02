<?php

declare(strict_types=1);

namespace Zodimo\BaseReturnTest;

interface CallableMock
{
    // @phpstan-ignore missingType.return
    public function __invoke();
}
