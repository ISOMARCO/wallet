<?php namespace Project\Controllers;
use TelegramBot, URL, DB, ML;
class Webhook extends Controller
{
    public function main()
    {
        $data = TelegramBot::getData();
        if(isset($data->callback_query)) 
        {
            $command = $data->callback_query->data;
            DB::insert("Logs", ["Text" => $command]);
            if($command == 'share')
            {
                TelegramBot::sendMessage('/share');
            }
        }
        if($data->message->text == '/start')
        {
            $keyboard = [
                [
                    ['text' => 'Share Profile', 'callback_data' => 'share']
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