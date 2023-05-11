<?php namespace Project\Controllers;

class login extends Controller
{
    public function main()
    {
        DB::status('postgres')->row();
        Masterpage::title("Login");
    }
}