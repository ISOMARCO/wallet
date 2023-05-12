<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
    }
}