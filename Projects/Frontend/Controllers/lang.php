<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','Home','Home');
        ML::insert('az','Home','Ana Səhifə');
        output(ML::selectAll());
        exit;
    }
}