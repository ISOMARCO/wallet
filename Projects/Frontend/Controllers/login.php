<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        echo DB::Users()->stringQuery();
        echo DB::Users()->tableName();
        Masterpage::title(ML::select('SignIn'));
    }
}