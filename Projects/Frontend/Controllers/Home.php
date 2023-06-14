<?php namespace Project\Controllers;
use URL, loginM, BrowserDetection;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        //$browser = new BrowserDetection();
        echo BrowserDetection::getBrowser('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36');
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