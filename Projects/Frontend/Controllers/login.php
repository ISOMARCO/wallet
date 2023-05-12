<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        $query = DB::select('Name')->Users()->stringQuery();
        output( DB::query( 'select "Name" from "Users"' )->row() );
        Masterpage::title(ML::select('SignIn'));
    }
}