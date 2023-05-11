<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        output( ML::select('SignIn') );
    }
}