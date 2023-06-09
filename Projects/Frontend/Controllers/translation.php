<?php namespace Project\Controllers;
use translationM, ML, Http, Post, Method;
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
            if(Method::post($lang->Code))
            {
                ML::insert($lang->Code, $key, Method::post($lang->Code));
            }
            else 
            {
                ML::insert($lang->Code, $key, 'ERROR');
            }
        }
        echo json_encode(['success' => true, 'key' => $key]);
        return;
    }
    public function deleteRequest()
    {
        Http::isAjax() or exit;
        #$key = Post::key();
        echo json_encode(['success' => 'ok']);
        return;
        $languages = translationM::languages()->result();
        foreach($languages as $lang)
        {
            ML::delete($lang->Code,$key);
        }
        echo json_encode(['success' => true]);
        return;
    }
}