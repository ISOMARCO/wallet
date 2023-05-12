<?php namespace Project\Controllers;
use DBTool;
class login extends Controller
{
    public function main()
    {
        output( DBTool::listTables() );
        Masterpage::title(ML::select('SignIn'));
    }
}