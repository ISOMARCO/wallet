<?php namespace Project\Controllers;
use TelegramBot, URL, Redirect;
class Webhook extends Controller
{
    public function main()
    {
        TelegramBot::sendMessage('demo');
        $data = TelegramBot::getData();
        if(strtolower($data->text) == 'hello')
        {
            TelegramBot::sendMessage('Helloo');
        }
        Redirect::code(302)->action('https://wallet.iso.com.az/webhook_demo.php');
    }
}