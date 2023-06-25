<?php namespace Project\Controllers;
use TelegramBot, URL, DB;
class Webhook extends Controller
{
    public function main()
    {
        TelegramBot::sendMessage('demo');
        $data = TelegramBot::getData();
        if(strtolower($data->message->text) == 'hello')
        {
            TelegramBot::sendMessage("Hello2");
            DB::insert("Logs", [
                "Text" => json_encode($data)
            ])
        }
    }
}