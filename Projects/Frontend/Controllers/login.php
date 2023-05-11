<?php namespace Project\Controllers;
use DBTool,ML,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        DBTool::listTables();
        #Masterpage::title(ML::select('SignIn'));
    }
}