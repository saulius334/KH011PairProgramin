<?php

namespace Unit\Unit\Validators;

use Pair\Validators\LowercaseValidator;
use PHPUnit\Framework\TestCase;

class LowercaseValidatorTest extends TestCase
{
    public function testValidator()
    {
        $validator = new LowercaseValidator();
        $this->assertTrue($validator->validate('labas'));
        // assertNotTrue($validator->validate('Labas'));
    }
}
