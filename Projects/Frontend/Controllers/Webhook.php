<?php namespace Project\Controllers;
use TelegramBot, URL;
class Webhook extends Controller
{
    public function main()
    {
        echo TelegramBot::getWebhookInfo();
        exit;
        $data = TelegramBot::getData();
        if($data->text == 'hello')
        {
            TelegramBot::sendMessage('Helloo');
        }
    }
}