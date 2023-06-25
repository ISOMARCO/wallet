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
            if($command == 'share_profile')
            {
                TelegramBot::sendMessage('/share');
            }
        }
        if($data->message->text == '/start')
        {
            $keyboard = [
                [
                    ['text' => 'Share Profile', 'callback_data' => 'share_profile']
                ]
            ];
            $markup = array(
                'inline_keyboard' => $keyboard
            );
            TelegramBot::sendMessage('Paylas',json_encode($markup));
        }
    }
}