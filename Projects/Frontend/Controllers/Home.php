<?php namespace Project\Controllers;
use Cookie,Session,URL,Cache;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        output( Cache::selectAll() );
    } 
    public function exit()
    {
        Cookie::deleteAll();
        Session::deleteAll();
        redirect(URL::base('login'));
        exit;
    }
    public function s404()
    {
        Masterpage::title('404! File Not Found');
    }
}