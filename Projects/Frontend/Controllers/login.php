<?php namespace Project\Controllers;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
    }
}