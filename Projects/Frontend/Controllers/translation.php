<?php namespace Project\Controllers;
use translationM;
class translation extends Controller
{
    public function main()
    {
        output(translationM::languages());exit;
        View::languages(translationM::languages());
    }
}