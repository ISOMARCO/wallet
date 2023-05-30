<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','operations','Operations');
        ML::insert('az','operations','Əməliyyatlar');
        output(ML::selectAll());
        exit;
    }
}