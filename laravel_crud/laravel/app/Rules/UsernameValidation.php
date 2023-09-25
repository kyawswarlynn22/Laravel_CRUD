<?php

namespace App\Rules;

use Closure;
use Dotenv\Validator;
use Illuminate\Contracts\Validation\ValidationRule;

class UsernameValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

      $nospace = preg_match('/^\S+$/', $value);
      
      if (!$nospace) {
        $fail(" user$attribute not contain space. " );
    }

    }
}
