<?php namespace Project\Controllers;
use ML,Library\Database\Database;
class login extends Controller
{
    public function main()
    {
        echo Database::main();
        Masterpage::title(ML::select('SignIn'));
    }
}