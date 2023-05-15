<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','Accounts','Accounts');
        ML::insert('az','Accounts','Hesablar');
        output(ML::selectAll());
        exit;
    }
}