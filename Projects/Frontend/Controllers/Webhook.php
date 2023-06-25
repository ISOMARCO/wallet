<?php namespace Project\Controllers;
use TelegramBot, URL, DB;
class Webhook extends Controller
{
    public function main()
    {
        TelegramBot::sendMessage('demo');
        $data = TelegramBot::getData();
        if($data->message->text == '/start')
        {
            $keyboard = [
                'inline_keyboard' => [
                    [
                        [
                            'text' => 'Profilimi Paylaş',
                            'callback_data' => 'share_profile'
                        ]
                    ]
                ]
            ];
            TelegramBot::sendMessage('Profilinizi paylaşmak için aşağıdaki düğmeye basın:',json_encode($keyboard));
            $dataArray = json_decode($data);
            DB::insert("Logs", [
                "Text" => $data,
                "Username" => $data->message->chat->username,
                "ChatId" => $data->message->chat->id
            ]);
        }
        if(strtolower($data->message->text) == 'hello')
        {
            TelegramBot::sendMessage("Hello2");
            DB::insert("Logs", [
                "Text" => $data
            ]);
        }
    }
}