<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','Search','Search');
        ML::insert('az','Search','Axtar');
        #ML::insert('en','CreateOperations','Əməliyyat yarat');
        #ML::insert('az','Search','Axtar');
        ML::delete('en','CreateOperations');
        ML::delete('az','CreateOperations');
        output(ML::selectAll());
        exit;
    }
}