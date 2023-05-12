<?php namespace Project\Controllers;
use ML;
class login extends Controller
{
    public function main()
    {
        DB::insert('Users',['Id'=>'1','Name'=>'Ismayil','Surname'=>'Nagiyev','Username'=>'ISOMARCO']);
        Masterpage::title(ML::select('SignIn'));
    }
}