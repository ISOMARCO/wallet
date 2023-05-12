<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        output( DB::Users('Name')->stringQuery() );
        Masterpage::title(ML::select('SignIn'));
    }
}