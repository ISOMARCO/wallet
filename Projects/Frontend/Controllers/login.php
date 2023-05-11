<?php namespace Project\Controllers;
use DB,DBTool;
class login extends Controller
{
    public function main()
    {
        output( DBTool::listTables() );
        Masterpage::title("Login");
    }
}