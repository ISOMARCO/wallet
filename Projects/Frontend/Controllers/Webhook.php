<?php namespace Project\Controllers;
use TelegramBot, URL;
class Webhook extends Controller
{
    public function main()
    {
        $data = TelegramBot::getData();
        if(strtolower($data->text) == 'hello')
        {
            TelegramBot::sendMessage('Helloo');
        }
    }
}