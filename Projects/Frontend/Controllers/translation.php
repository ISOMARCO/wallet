<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $words = ML::selectAll();
        output(array_keys($words));exit;
        $languages = translationM::languages()->result();
        while(true)
        {
            foreach($languages as $value) 
            {
                echo $words[$value]
            }
        }
        #View::words( ML::selectAll() );
        #View::languages(translationM::languages()->result());
    }
}