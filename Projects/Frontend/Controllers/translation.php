<?php namespace Project\Controllers;
use translationM;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        View::languages(translationM::languages());
    }
}