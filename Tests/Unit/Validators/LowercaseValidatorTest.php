<?php

namespace Unit\Unit\Validators;

use Pair\Validators\LowercaseValidator;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

class LowercaseValidatorTest extends TestCase
{
    public function testValidator()
    {
        $validator = new LowercaseValidator(3);
        assertTrue($validator->validate('labas'));

        assertFalse($validator->validate('Labas'));

    }
}
