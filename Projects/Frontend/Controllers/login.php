<?php namespace Project\Controllers;
use ML,Database;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
    }
}