<?php namespace Project\Controllers;
use DBTool,ML;
class login extends Controller
{
    public function main()
    {
        DBTool::listTables();
        Masterpage::title(ML::select('SignIn'));
    }
}