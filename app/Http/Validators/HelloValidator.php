<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters)

    {
        return is_numeric($value)? $value % 2 == 0 : false;
    }
}

