<?php namespace Project\Controllers;
use DB,ML,MigrateUsers;
class login extends Controller
{
    public function main()
    {
        DB::users()->row();
        #Masterpage::title(ML::select('SignIn'));
        
    }
}