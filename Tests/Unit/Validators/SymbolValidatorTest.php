<?php

namespace Unit\Unit\Validators;

use Pair\Validators\SymbolValidator;
use PHPUnit\Framework\TestCase;

class SymbolValidatorTest extends TestCase
{
    public function testValidator()
    {
        $validator = new SymbolValidator('@');
        $this->assertTrue($validator->validate('l@bas'));
        // assertNotTrue($validator->validate('la'));
    }
}
