<?php namespace Project\Controllers;
use DB;
class login extends Controller
{
    public function main()
    {
        echo DB::error();
        Masterpage::title("Login");
    }
}