<?php namespace Project\Controllers;
use URL, loginM, TelegramBot, DB;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        foreach(DB::Logs()->result() as $value)
        {
            #$data = json_decode($value->Text, true);
            echo $value->Text."<br>";
        }
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