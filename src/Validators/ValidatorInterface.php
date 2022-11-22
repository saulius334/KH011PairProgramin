<?php

namespace Pair\Validators;

interface ValidatorInterface
{
    public function validate(mixed $input): bool;
}