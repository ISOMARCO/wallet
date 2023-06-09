<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        View::words( ML::selectAll() );
        foreach(ML::selectAll()['en'] as $key => $value)
        {
            echo $key." ".$value."<br>";
        }exit;
        View::languages(translationM::languages()->result());
    }
}