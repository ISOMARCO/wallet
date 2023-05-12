<?php namespace Project\Controllers;
class login extends Controller
{
    public function main()
    {
        exit('okey');
        Masterpage::title(ML::select('SignIn'));
    }
}