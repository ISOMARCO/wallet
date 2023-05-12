<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        $query = DB::select('Name')->Users()->stringQuery();
        output( DB::query( str_replace('Users','"'.'Users'.'"',$query) )->row() );
        Masterpage::title(ML::select('SignIn'));
    }
}