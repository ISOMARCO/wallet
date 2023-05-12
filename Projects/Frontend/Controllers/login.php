<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        echo MigrateUsers::up();
        Masterpage::title(ML::select('SignIn'));
    }
}