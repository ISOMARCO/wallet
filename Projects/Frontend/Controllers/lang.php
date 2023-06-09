<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        $all = ML::selectAll();
        for($i = 0; $i < count($all['en']); $i++)
        {
            echo $all[$i]."<br>";1
        }
        exit;
    }
}