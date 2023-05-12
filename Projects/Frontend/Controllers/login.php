<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        #output( DB::select('"Name"')->Users()->stringQuery() );
        output( DB::query('SELECT * FROM "Users" WHERE "Name" = "Ismayil"')->stringQuery() );
        Masterpage::title(ML::select('SignIn'));
    }
}