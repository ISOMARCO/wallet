<?php namespace Project\Controllers;
use DB;
class login extends Controller
{
    public function main()
    {
        DB::users()->row();
        Masterpage::title("Login");
    }
}