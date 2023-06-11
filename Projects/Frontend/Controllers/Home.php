<?php namespace Project\Controllers;
use Cookie, Session, URL, Cache, MigrateSystem_Settings;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        MigrateSystem_Settings::up();
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