<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
        output( DB::query('select * from "Users" where Name = "Ismayil"')->row() );
    }
}