<?php namespace Project\Controllers;
use ML,DB,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        echo DB::query("SELECT * FROM 'Users'")->row()->Name;
        Masterpage::title(ML::select('SignIn'));
    }
}