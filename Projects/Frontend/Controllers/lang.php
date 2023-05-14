<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','Menu','Menu');
        ML::insert('az','Menu','Menyu');
        output(ML::selectAll());
    }
}