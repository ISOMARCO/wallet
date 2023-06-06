<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        #ML::delete('en','Category');
        #ML::delete('az','Category');
        ML::insert('en','AddCategorySuccessMessage','Category successfully added. You are being redirected to the Categories page...');
        ML::insert('az','AddCategorySuccessMessage','Kateqoriya uğurla əlavə edildi. Kateqoriyalar səhifəsinə yönləndirilirsiniz...');
        ML::insert('en','AddCategoryNullNameErrorMessage','The name cannot be left blank.');
        ML::insert('az','AddCategoryNullNameErrorMessage','Ad boş buraxıla bilməz.');
        output(ML::selectAll());
        exit;
    }
}