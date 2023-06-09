<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $languages = translationM::languages()->result();
        View::words( ML::selectAll() );
        View::keys(array_keys($languages));
        View::languages($languages);
        
        exit;
    }
}