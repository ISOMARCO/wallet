<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        #ML::delete('en','Category');
        #ML::delete('az','Category');
        ML::insert('en','Submit','Submit');
        ML::insert('az','Submit','Göndər');
        ML::insert('en','Reset','Reset');
        ML::insert('az','Reset','Sıfırla');
        output(ML::selectAll());
        exit;
    }
}