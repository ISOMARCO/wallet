<?php namespace Project\Controllers;
use Cookie, Session, URL, Cache, MigrateSessions;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        MigrateSessions::up();
    } 
    public function exit()
    {
        Cookie::deleteAll();
        if(Cache::select('userInfo_'.Session::Uid()))
        {
            Cache::delete('userInfo_'.Session::Uid());
        }
        Session::deleteAll();
        redirect(URL::base('login'));
        exit;
    }
    public function s404()
    {
        Masterpage::title('404! File Not Found');
    }
}