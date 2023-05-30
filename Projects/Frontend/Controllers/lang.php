<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','Search','Search');
        ML::insert('az','Search','Axtar');
        ML::insert('en','CreateOperations','Create Operation');
        ML::insert('az','CreateOperations','Əməliyyat yarat');
        #ML::delete('en','CreateOperations');
        #ML::delete('az','CreateOperations');
        output(ML::selectAll());
        exit;
    }
}