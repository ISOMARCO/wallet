<?php namespace Project\Controllers;
use TelegramBot;
class Webhook extends Controller
{
    public function main()
    {
        $data = TelegramBot::getData();
        if($data->text == 'hello')
        {
            TelegramBot::sendMessage('sanada hello');
        }
        exit;
    }
}