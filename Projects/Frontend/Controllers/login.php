<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        output(DB::table('Users')->row());
        Masterpage::title(ML::select('SignIn'));
    }
}