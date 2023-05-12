<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        //echo DB::insert('Users',['Name'=>'Ismayil','Surname'=>'Nagiyev','Username'=>'ISOMARCO2']);
        echo DB::Users()->row()->stringQuery();
        //output( DB::Users()->result() );
        Masterpage::title(ML::select('SignIn'));
    }
}