<?php namespace Project\Controllers;
use URL, loginM, TelegramBot;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        $arr = json_decode('{"update_id":711640138,"message":{"message_id":6,"from":{"id":814802441,"is_bot":false,"first_name":"Ismayil","username":"ISOMARCO","language_code":"tr"},"chat":{"id":814802441,"first_name":"Ismayil","username":"ISOMARCO","type":"private"},"date":1688208811,"contact":{"phone_number":"994505534565","first_name":"Ismayil","user_id":814802441}}}', true);
        echo $arr['message']['contact']['phone_number'];
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