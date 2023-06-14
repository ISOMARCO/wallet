<?php namespace Project\Controllers;
use URL, loginM, BrowserDetection;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        echo BrowserDetection::getBrowser();
    } 
    public function exit($all = NULL)
    {
        loginM::logout($all);
        redirect(URL::base('login'));
        exit;
    }
    public function s404()
    {
        Masterpage::title('404 File Not Found!');
    }
}