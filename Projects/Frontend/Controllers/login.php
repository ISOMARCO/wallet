<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        echo DB::insert('Users',['Id'=>'1','Name'=>'Ismayil','Surname'=>'Nagiyev','Username'=>'ISOMARCO']);
        Masterpage::title(ML::select('SignIn'));
    }
}