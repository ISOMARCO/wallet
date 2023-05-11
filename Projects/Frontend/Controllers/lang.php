<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','ForgotPassword','Forgot Password');
        ML::insert('az','ForgotPassword','Şifrəmi Unuttum');
        output(ML::selectAll());
    }
}