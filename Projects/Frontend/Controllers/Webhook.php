<?php namespace Project\Controllers;
use TelegramBot, URL, DB, ML;
class Webhook extends Controller
{
    public function main()
    {
        $data = TelegramBot::getData();
        if(isset($data->CallbackQuery)) 
        {
            DB::insert("Logs", ["Text" => $data]);
            /*$command = $data->CallbackQuery->data;
            if($command == 'share_profile')
            {
                TelegramBot::sendMessage('/share');
            }*/
        }
        if($data->message->text == '/start')
        {
            $keyboard = [
                [
                    ['text' => 'Share Profile', 'callback_data' => 'share_profile']
                ]
            ];
            $markup = array(
                'inline_keyboard_button' => $keyboard
            );
            TelegramBot::sendMessage('Paylas',json_encode($markup));
        }
    }
}