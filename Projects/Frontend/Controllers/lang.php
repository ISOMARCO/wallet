<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        #ML::delete('en','Category');
        #ML::delete('az','Category');
        ML::insert('en','ExitAlertMessage','Are you sure to exit ?');
        ML::insert('az','ExitAlertMessage','Çıxmaq istədiyinizdən əminsiniz ?');
        #ML::insert('en','Reset','Reset');
        #ML::insert('az','Reset','Sıfırla');
        output(ML::selectAll());
        exit;
    }
}