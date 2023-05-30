<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','Operations','Operations');
        ML::insert('az','Operations','Əməliyyatlar');
        ML::delete('en','operations');
        ML::delete('az','operations');
        output(ML::selectAll());
        exit;
    }
}