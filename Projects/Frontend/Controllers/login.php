<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        echo DB::serial(10);
        Masterpage::title(ML::select('SignIn'));
    }
}