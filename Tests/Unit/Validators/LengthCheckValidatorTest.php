<?php

namespace Unit\Unit\Validators;

use Pair\Validators\LengthCheckValidator;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

class LengthCheckValidatorTest extends TestCase
{
    public function testValidator()
    {
        $validator = new LengthCheckValidator(3);
        assertTrue($validator->validate('labas'));
        assertFalse($validator->validate('la'));
    }
}
