<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        echo DB::table('Users')->stringQuery();
        Masterpage::title(ML::select('SignIn'));
    }
}