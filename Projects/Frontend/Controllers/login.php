<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        output( DB::migrations()->result() );
        Masterpage::title(ML::select('SignIn'));
    }
}