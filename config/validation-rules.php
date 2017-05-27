<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation rules.
    |--------------------------------------------------------------------------
    */

    /**
     * User
     */
    'user' => [

        'name'     => 'required|min:1|max:20',
        'email'    => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|max:100|confirmed',

    ],

];
