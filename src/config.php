<?php

return [
    /*
     * Where to redirect after a unsuccessful auth
     */
    'redirect' => '/login',

    /*
     * which field in the database mutst be true for a admin
     * boolean
     */
    'condition' => 'admin',

    /*
     * The Database-Table with your User Model
     */
    'table' => 'users',
];