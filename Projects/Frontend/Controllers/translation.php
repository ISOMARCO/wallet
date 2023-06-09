<?php namespace Project\Controllers;
use translationM, ML;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $languages = translationM::languages()->result();
        $words = ML::selectAll();
        foreach($words[$languages[0]->Code] as $key => $value)
        {
            foreach($languages as $lang)
            {
                echo $words[$lang]['RememberMe'];
            }
        }
        View::words(  );
        View::languages();
        
        exit;
    }
}