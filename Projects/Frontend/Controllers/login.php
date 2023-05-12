<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        $query = DB::select('Name')->Users()->stringQuery();
        Masterpage::title(ML::select('SignIn'));
    }
}