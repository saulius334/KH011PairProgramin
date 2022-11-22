<?php

namespace Unit\Features;

use Pair\Service\ValidatorService;
use Pair\Validators\LengthCheckValidator;
use PHPUnit\Framework\TestCase;

class ValidatorServiceTest extends TestCase
{
    public function testValidatorService()
    {
        $validator = new ValidatorService([new LengthCheckValidator(3)]);
        $this->assertEquals($validator->validate('la'), ['Pair\Validators\LengthCheckValidator' => "Input length must be at least 3 characters"] );
    }
}
