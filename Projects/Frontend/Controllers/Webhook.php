<?php namespace Project\Controllers;
use TelegramBot, URL;
class Webhook extends Controller
{
    public function main()
    {
        TelegramBot::setWebhook(URL::base('Webhook'));
        $data = TelegramBot::getData();
        if($data->text == 'hello')
        {
            TelegramBot::sendMessage('sanada hello');
        }
        exit;
    }
}