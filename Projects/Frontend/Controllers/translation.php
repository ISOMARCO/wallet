<?php namespace Project\Controllers;
use translationM, ML, Http, Post;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $languages = translationM::languages()->result();
        $words = ML::selectAll();
        // foreach($words[$languages[0]->Code] as $key => $value)
        // {
        //     echo $key."<br>";
        //     // foreach($languages as $lang)
        //     // {
        //     //     echo $lang->Name." ".$words[$lang->Code][$key]."<br>";
        //     // }
        // }
        // exit;
        View::words($words);
        View::languages($languages);
    }
    public function createRequest()
    {
        Http::isAjax() or exit;
        $languages = translationM::languages()->result();
        $key = Post::key();
        foreach($languages as $lang)
        {
            echo json_encode(['success' => Post::select($lang->Code)]);
            return;
            #ML::insert($lang->Code, $key, Post::select($lang->Code));
        }
    }
}