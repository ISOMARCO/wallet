<?php namespace Project\Controllers;
use DBTool,ML;
class login extends Controller
{
    public function main()
    {
        MigrateUsers::up();
        #output( DBTool::listTables() );
        Masterpage::title(ML::select('SignIn'));
    }
}