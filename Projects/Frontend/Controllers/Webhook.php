<?php namespace Project\Controllers;
use TelegramBot, URL;
class Webhook extends Controller
{
    public function main()
    {
        echo TelegramBot::setWebhook(URL::base('Webhook'));
        exit;
        $data = TelegramBot::getData();
        if($data->text == 'hello')
        {
            TelegramBot::sendMessage('sanada hello');
        }
        exit;
    }
}