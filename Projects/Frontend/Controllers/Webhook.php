<?php namespace Project\Controllers;
use TelegramBot, URL, DB, ML;
class Webhook extends Controller
{
    public function main()
    {
        TelegramBot::sendMessage('demo');
        $data = TelegramBot::getData();
        if($data->message->text == '/start')
        {
            $keyboard = [
                [
                    ['text' => 'Share Profile', 'callback_data' => 'share_profile', 'command' => '/share_profile']
                ]
            ];
            $markup = array(
                'keyboard' => $keyboard,
                'text' => 'menu_demo',
                'resize_keyboard' => true
            );
            TelegramBot::sendMessage('Profilinizi paylaşmak için aşağıdaki düğmeye basın:',json_encode($keyboard));
            DB::insert("Logs", [
                "Text" => $data,
                "Username" => $data->message->chat->username,
                "ChatId" => $data->message->chat->id
            ]);
        }
    }
}