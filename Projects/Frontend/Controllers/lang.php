<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        #ML::delete('en','Category');
        #ML::delete('az','Category');
        ML::insert('en','Name','Name');
        ML::insert('az','Name','Ad');
        ML::insert('en','Categories','Categories');
        ML::insert('az','Categories','Kateqoriyalar');
        output(ML::selectAll());
        exit;
    }
}