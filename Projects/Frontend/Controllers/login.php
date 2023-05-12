<?php namespace Project\Controllers;
use ML,DB;
class login extends Controller
{
    public function main()
    {
        $tableName = DB::Users()->tableName();
        $query = str_replace($tableName,'"'.$tableName.'"',DB::Users()->stringQuery());
        output( DB::query($query)->result() );
        Masterpage::title(ML::select('SignIn'));
    }
}