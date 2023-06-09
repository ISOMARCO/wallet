<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $words = ML::selectAll();
        $languages = translationM::languages()->result();
        foreach($languages as $val)
        {
            echo $val->Code;exit;
            foreach($words[$val] as $key => $value)
            {
                echo $value."<br>";
            }
        }
        exit;
        View::words( ML::selectAll() );
        View::languages(translationM::languages()->result());
    }
}