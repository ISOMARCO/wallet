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
        ML::insert('en','AddCategoryNullNameErrorMessage','The name cannot be left blank.');
        ML::insert('az','AddCategoryNullNameErrorMessage','Ad boş buraxıla bilməz.');
        output(ML::selectAll());
        exit;
    }
}