<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        #output( DB::select('"Name"')->Users()->stringQuery() );
        $query = DB::where('Name','Ismayil')->Users()->stringQuery();
        output( DB::query( str_replace('Users','"Users"',$query) )->stringQuery() );
        Masterpage::title(ML::select('SignIn'));
    }
}