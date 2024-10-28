<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function users(): string
    {
        return view('users/users');
    }
}