<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        #output( DB::select('"Name"')->Users()->stringQuery() );
        output( DB::where('"Name"','Ismayil')->Users()->stringQuery() );
        Masterpage::title(ML::select('SignIn'));
    }
}