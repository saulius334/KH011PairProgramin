<?php

namespace Unit\Unit\Validators;

use Pair\Validators\LengthCheckValidator;
use PHPUnit\Framework\TestCase;

class LengthCheckValidatorTest extends TestCase
{
    public function testValidator()
    {
        $validator = new LengthCheckValidator(3);
        $this->assertTrue($validator->validate('labas'));
        // $this->expectExceptionMessage('Input length must be at least 3 characters');
    }
}
