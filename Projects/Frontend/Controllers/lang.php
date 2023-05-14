<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','LoginNullError','You must fill in all the boxes.');
        ML::insert('az','LoginNullError','Bütün xanaları doldurmalısınız.');
        output(ML::selectAll());
    }
}