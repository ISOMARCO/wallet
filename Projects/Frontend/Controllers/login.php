<?php namespace Project\Controllers;
use ML,MigrateUsers,DB;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
        echo MigrateUsers::up();
        if(empty(intval("1")))echo 'okey';
        else echo 'no';
    }
}