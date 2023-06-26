<?php namespace Project\Controllers;
use TelegramBot, URL, DB, ML;
class Webhook extends Controller
{
    public function main()
    {
        //$data = TelegramBot::getData();
        $data = json_decode( file_get_contents("php://input"), true );
        $chatId = $data['message']['chat']['id'];
        if($data['message']['text'] == '/start')
        {
            TelegramBot::runRequest($data['message']['text'], $data);
        }
        if(isset($data['message']['contact']['phone_number']))
        {
            TelegramBot::runRequest('Registered', $data);
        }
    }
}