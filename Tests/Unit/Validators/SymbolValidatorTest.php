<?php

namespace Unit\Unit\Validators;

use Pair\Validators\SymbolValidator;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

class SymbolValidatorTest extends TestCase
{
    public function testValidator()
    {
        $validator = new SymbolValidator('@');
        assertTrue($validator->validate('l@bas'));
        assertFalse($validator->validate('la'));
    }
}
