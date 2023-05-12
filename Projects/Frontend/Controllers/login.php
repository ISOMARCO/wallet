<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {

        output(DB::Users()->select('Name')->tableName());
        Masterpage::title(ML::select('SignIn'));
    }
}