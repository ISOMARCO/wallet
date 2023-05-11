<?php namespace Project\Controllers;
use ML;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
        exit('okey');
    }
}