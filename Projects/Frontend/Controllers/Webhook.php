<?php namespace Project\Controllers;
use TelegramBot;
class Webhook extends Controller
{
    public function main()
    {
        echo TelegramBot::setWebhook(URL::base('Webhook'));
    }
}