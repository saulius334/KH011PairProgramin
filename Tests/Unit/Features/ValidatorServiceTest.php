<?php

namespace Unit\Features;

use Generator;
use PHPUnit\Framework\TestCase;
use Pair\Service\ValidatorService;
use Pair\Validators\LengthCheckValidator;

class ValidatorServiceTest extends TestCase
{
    /**
    * @dataProvider dataProvider
    */
    public function testValidatorService(array $validators, array $expected)
    {
        $validator = new ValidatorService($validators);
        $this->assertEquals($validator->validate('la'), $expected);
    }
    public function dataProvider(): Generator
    {
        yield '1' => [
            [new LengthCheckValidator(3)],
            [[LengthCheckValidator::class => "Input length must be at least 3 characters"]]
        ];
        yield '2' => [[new LengthCheckValidator(3),new LengthCheckValidator(10)],
        [[LengthCheckValidator::class => "Input length must be at least 3 characters"],
        [LengthCheckValidator::class => "Input length must be at least 10 characters"]]
    ];
        // yield '3' => [];
        // yield '4' => [];
        // yield '5' => [];
    }
}
