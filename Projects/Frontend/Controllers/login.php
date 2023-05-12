<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        echo DB::defaultValue(uniqid(uniqid().'_'));
        #echo MigrateUsers::up();
        Masterpage::title(ML::select('SignIn'));
    }
}