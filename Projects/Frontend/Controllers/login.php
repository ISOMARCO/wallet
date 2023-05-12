<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        output( DB::Users()->result() );
        Masterpage::title(ML::select('SignIn'));
    }
}