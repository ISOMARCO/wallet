<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {

        output(DB::Users()->select('Name')->row());
        Masterpage::title(ML::select('SignIn'));
    }
}