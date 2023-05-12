<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        echo DB::autoIncrement();
        Masterpage::title(ML::select('SignIn'));
    }
}