<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        output( DB::query("SELECT * FROM 'Users'")->row() );
        Masterpage::title(ML::select('SignIn'));
    }
}