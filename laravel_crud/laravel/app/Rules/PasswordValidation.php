<?php

namespace App\Rules;

use Closure;
use Dotenv\Validator;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Http\Request;

class PasswordValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $request;

    public function __construct(Request $request) 
    {
      $this->request = $request;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!ctype_upper(substr($value, 0, 1))) {
            $fail('The first letter of the password must be uppercase.');
        }

        $fourdigit = preg_match('/\d{4,}/', $value);
        if (!$fourdigit) {
            $fail('Password at least contain 4 digit');
        }

        $specialChar = preg_match('/[!@#$%^&*()+=-]/', $value);
        if (!$specialChar) {
            $fail('Password at least contain one special character');
        }

        if (ctype_digit(substr($value, -1))) {
            $fail('The last character of the password cannot be a number.');
        };

        $username = $this->request->input('name');
        if(strpos($value, $username) !== false) {
            $fail('Password cannot contain username');
          }
    }
}
