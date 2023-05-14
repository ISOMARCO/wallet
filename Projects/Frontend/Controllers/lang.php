<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','Exit','Exit');
        ML::insert('az','Exit','Çıxış');
        output(ML::selectAll());
        exit;
    }
}