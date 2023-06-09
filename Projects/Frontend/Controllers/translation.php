<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $ml = ML::selectAll();
        output($ml['en']);
        for($i = 0; $i < count($ml['en']); $i++)
        {
            echo $ml[$i]['en']['RememberMe'];
        }exit;
        View::words( ML::selectAll() );
        View::languages(translationM::languages()->result());
    }
}