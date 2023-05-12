<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        $tableName = DB::Users()->tableName();
        echo str_replace($tableName,'"'.$tableName.'"',DB::Users()->stringQuery());
        Masterpage::title(ML::select('SignIn'));
    }
}