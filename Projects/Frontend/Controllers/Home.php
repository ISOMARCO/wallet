<?php namespace Project\Controllers;
use URL, loginM;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
    } 
    public function exit()
    {
        loginM::logout();
        redirect(URL::base('login'));
        exit;
    }
    public function s404()
    {
        Masterpage::title('404 File Not Found!');
    }
}