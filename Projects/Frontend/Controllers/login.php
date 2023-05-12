<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        output(DB::Users()->select('Name')->stringQuery());
        Masterpage::title(ML::select('SignIn'));
    }
}