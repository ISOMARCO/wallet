<?php namespace Project\Controllers;
use translationM, ML, Http, Post, Method;
class translation extends Controller
{
    public function main()
    {
        Masterpage::title("Translation");
        $languages = translationM::languages()->result();
        $words = ML::selectAll();
        View::words($words);
        View::languages($languages);
        /*if(ML::select('RememberMe', ML::lang('ru')) != 'RememberMe')
        {
            ML::update('ru', 'RememberMe', 'Запомнить меня');
            echo '15';
        }
        else 
        {
            ML::insert('ru', 'RememberMe', 'Запомнить меня');
            echo '19';
        }*/
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
        $languages = translationM::languages()->result();
        foreach($languages as $lang)
        {
            $key = Method::post('key_'.$lang->Code);
            ML::delete($lang->Code, $key);
        }
        echo json_encode(['success' => true]);
        return;
    }
    public function updateRequest()
    {
        Http::isAjax() or exit;
        $languages = translationM::languages()->result();
        foreach($languages as $lang)
        {
            $key = Method::post('key_'.$lang->Code);
            if(ML::select($key, ML::lang($lang->Code)) != $key)
            {
                ML::update($lang->Code, $key, Method::post($lang->Code));
                if($lang->Code == 'ru') $s = $lang->Code." ".$key;
            }
            else 
            {
                ML::insert($lang->Code, $key, Method::post($lang->Code));
                if($lang->Code == 'ru') $s = $lang->Code." ".$key;
            }
        }
        echo json_encode(['success' => $s]);
        return;
    }
}