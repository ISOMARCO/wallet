<?php namespace Project\Controllers;
use URL, loginM, BrowserDetection;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        //$browser = new BrowserDetection();
        output(BrowserDetection::getBrowser($_SERVER['HTTP_USER_AGENT']));
        output(BrowserDetection::getOS($_SERVER['HTTP_USER_AGENT']));
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