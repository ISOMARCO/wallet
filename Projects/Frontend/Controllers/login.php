<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        #output( DB::select('"Name"')->Users()->stringQuery() );
        $val = "'Ismayil'";
        output( DB::query('SELECT * FROM "Users" WHERE "Name" = '.$val)->result() );
        Masterpage::title(ML::select('SignIn'));
    }
}