<?php

/* 
php artisan make:rule ruleName 

custom validation rules by object,
*)use class in controller ruleName,
*)type your rule in public function passes 
*)input value will come into $value parameter and you can type your rule by using this,
*)type your message in message function, 
*)use rules by new ruleName,

custom validation rules by closur,
*)use closer function in your validation function,
*)parameter will be $attribute,$value,$fail,
*)if fail then $fail(':attribute message');


*/

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class upperCase implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $validation_rules = strtoupper($value);

        return ($validation_rules == $value); //if equal then return true
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attributes must be uppercase';
    }
}
