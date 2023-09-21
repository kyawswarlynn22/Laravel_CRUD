<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ContainsValue implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $valiUnits = ['dr','.'];

        $startsWithValidUnit = false;
        foreach ($valiUnits as $unit) {
            if (str_starts_with(strtolower($value), $unit)) {
                $startsWithValidUnit = true;
                break;
            }
        }
        if ($startsWithValidUnit ) {
            $fail("The $attribute must input Doctor's name only not include 'Dr' or not start with '.' .");
        }
    }
}
