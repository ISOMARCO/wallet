<?php namespace Project\Controllers;
use URL, loginM, TelegramBot;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        echo TelegramBot::setToken('5534810537:AAEfTCYFMsg1qmPsxk3t6Rmnc3Jp8yqurD0')->showUrl;
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