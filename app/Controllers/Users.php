<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function users(): string
    {
        echo date('Y-m-d H:i:s');
        return view('users/users');
    }
    public function list():string
    {
        print_r($this->session);
       return "List Users";
    }
}