<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        output( DB::users()->getTableName() );
        Masterpage::title(ML::select('SignIn'));
    }
}