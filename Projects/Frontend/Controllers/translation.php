<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $languages = translationM::languages()->result();
        $words = ML::selectAll();
        for($i=0;$i<count($words);$i++)
        {
            echo $words[$languages[$i]->Code]['RememberMe'];
        }
        output($words);exit;
        View::words(  );
        View::languages();
        
        exit;
    }
}