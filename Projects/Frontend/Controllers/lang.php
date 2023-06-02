<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        #ML::delete('en','Category');
        #ML::delete('az','Category');
        ML::i1nsert('en','Yes','Yes');
        ML::insert('az','Yes','Bəli');
        ML::insert('en','No','No');
        ML::insert('az','No','Xeyr');
        output(ML::selectAll());
        exit;
    }
}