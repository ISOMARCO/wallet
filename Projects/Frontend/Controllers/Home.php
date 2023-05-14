<?php namespace Project\Controllers;
use Cookie,Session,URL,Cache;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        $arr = json_decode(Cache::select('userInfo_'.Session::Uid()));
        print_r($arr);
    } 
    public function exit()
    {
        Cookie::deleteAll();
        Cache::delete('userInfo_'.Session::Uid());
        Session::deleteAll();
        redirect(URL::base('login'));
        exit;
    }
    public function s404()
    {
        Masterpage::title('404! File Not Found');
    }
}