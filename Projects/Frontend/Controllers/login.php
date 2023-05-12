<?php namespace Project\Controllers;
use DBTool,ML,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        MigrateUsers::up();
        #output( DBTool::listTables() );
        Masterpage::title(ML::select('SignIn'));
    }
}