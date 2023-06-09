<?php namespace Project\Controllers;
use translationM;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        foreach(translationM::languages()->result() as $value)
        {
            echo $value['Name'];
        }exit;
        View::languages(translationM::languages()->result());
    }
}