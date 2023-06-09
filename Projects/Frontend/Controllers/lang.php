<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        $all = ML::selectAll();
        foreach($all['en'] as $key=>$value)
        {
            echo $key." ".$value."<br>";
        }
        exit;
    }
}