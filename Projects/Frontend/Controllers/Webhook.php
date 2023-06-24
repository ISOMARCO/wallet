<?php namespace Project\Controllers;
use TelegramBot, URL;
class Webhook extends Controller
{
    public function main()
    {
        echo TelegramBot::setWebhook(URL::base('Webhook'));
    }
}