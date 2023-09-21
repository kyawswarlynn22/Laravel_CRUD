<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CustomValidationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $valiUnits = ['g','oz','mg','kg'];

        $endsWithValidUnit = false;
        foreach ($valiUnits as $unit) {
            if (str_ends_with($value, $unit)) {
                $endsWithValidUnit = true;
                break;
            }
        }

        if (!$endsWithValidUnit) {
            $fail("The $attribute must end with one of the weight units: " . implode(', ', $valiUnits));
        }
    }
}
