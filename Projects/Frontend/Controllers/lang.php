<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','LoginSuccessfully','You are redirected to the home page...');
        ML::insert('az','LoginSuccessfully','Ana səhifəyə yönləndirilirsiniz...');
        output(ML::selectAll());
        exit;
    }
}