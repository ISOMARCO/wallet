<?php namespace Project\Controllers;
use TelegramBot, URL, DB, ML;
class Webhook extends Controller
{
    public function main()
    {
        TelegramBot::sendMessage('demo');
        $data = TelegramBot::getData();
        DB::insert('Logs', ['Text' => $data]);
        if($data->message->text == '/start')
        {
            $keyboard = [
                [
                    ['text' => 'Share Profile', 'callback_data' => '/share', 'command' => '/share']
                ]
            ];
            $markup = array(
                'inline_keyboard' => $keyboard
            );
            TelegramBot::sendMessage('Paylas',json_encode($markup));
            DB::insert("Logs", [
                "Text" => $data,
                "Username" => $data->message->chat->username,
                "ChatId" => $data->message->chat->id
            ]);
        }
    }
}