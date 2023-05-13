<?php namespace Project\Controllers;
use ML,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
        echo MigrateUsers::up();
    }
}