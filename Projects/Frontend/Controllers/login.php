<?php namespace Project\Controllers;
use ML;
class login extends Controller
{
    public function main()
    {
        DB::insert('Users',['Name'=>'Ismayil']);
        Masterpage::title(ML::select('SignIn'));
    }
}