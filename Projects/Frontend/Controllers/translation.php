<?php namespace Project\Controllers;
use translationM;
class translation extends Controller
{
    public function main()
    {
        View::languages(translationM::languages());
    }
}