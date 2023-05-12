<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        $query = DB::select('Name')->Users()->stringQuery();
        $columns = DB::Users()->columns();
        output( $columns );
        Masterpage::title(ML::select('SignIn'));
    }
}