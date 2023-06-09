<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $languages = translationM::languages()->result();
        View::words( ML::selectAll() );
        View::keys(array_keys(ML::selectAll()[$languages[0]->Code]));
        output(array_keys(ML::selectAll()[$languages[0]->Code]));
        View::languages();
        
        exit;
    }
}