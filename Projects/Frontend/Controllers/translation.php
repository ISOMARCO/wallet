<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $languages = translationM::languages()->result();
        $words = ML::selectAll();
        echo count($words);
        output($words);exit;
        View::words(  );
        View::languages();
        
        exit;
    }
}