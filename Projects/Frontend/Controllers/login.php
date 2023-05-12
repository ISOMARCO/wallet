<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        echo DB::defaultValue(hash(uniqid(),'sha256'));
        #echo MigrateUsers::up();
        Masterpage::title(ML::select('SignIn'));
    }
}