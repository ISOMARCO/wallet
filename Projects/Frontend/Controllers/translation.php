<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        View::words( ML::selectAll() );
        View::languages(translationM::languages()->result());
        output(array_keys(ML::selectAll()['en']));
        exit;
    }
}