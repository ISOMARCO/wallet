<?php namespace Project\Controllers;
use DB;
class login extends Controller
{
    public function main()
    {
        #echo DB::insert('Users',['id'=>'1','Name'=>'Ismayil','Surname'=>'Nagiyev','Username'=>'ISOMARCO']);
        Masterpage::title(ML::select('SignIn'));
    }
}