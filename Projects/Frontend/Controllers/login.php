<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        DB::insert('Users',['Name'=>'Ismayil','Surname'=>'Nagiyev','Username'=>'ISOMARCO']);
        Masterpage::title(ML::select('SignIn'));
    }
}