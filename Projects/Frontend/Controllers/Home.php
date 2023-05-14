<?php namespace Project\Controllers;
use Cookie,Session,URL;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Welcome to The World of Simplicity');
        echo phpinfo();
        exit;
        output( Cache::info() );
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