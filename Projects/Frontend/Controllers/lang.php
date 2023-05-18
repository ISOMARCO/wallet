<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','Category','Categories');
        ML::insert('az','Category','Kateqoriyalar');
        output(ML::selectAll());
        exit;
    }
}