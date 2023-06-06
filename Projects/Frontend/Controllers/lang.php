<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        #ML::delete('en','Category');
        #ML::delete('az','Category');
        ML::insert('en','AddCategoryUnknownErrorMessage','Please try again');
        ML::insert('az','AddCategoryUnknownErrorMessage','Zəhmət olmasa yenidən cəhd edin');
        ML::insert('en','Error','Error');
        ML::insert('az','Error','Xəta');
        output(ML::selectAll());
        exit;
    }
}