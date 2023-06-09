<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        $all = ML::selectAll();
        echo count($all['en']);
        exit;
    }
}