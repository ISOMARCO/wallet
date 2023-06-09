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
            for($i = 0; $i < count($words); $i++)
            {
                echo $words[$words[$i]][$key];
            }
        }
        #output($words);exit;
        View::words(  );
        View::languages();
        
        exit;
    }
}