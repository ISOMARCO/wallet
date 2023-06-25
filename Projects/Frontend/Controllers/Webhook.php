<?php namespace Project\Controllers;
use TelegramBot, URL, DB, ML;
class Webhook extends Controller
{
    public function main()
    {
        $data = TelegramBot::getData();
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
        $data = json_decode($data, true);
        $query = $data['callback_query'];
        $queryData = $query['data'];
        $id = $query['from']['id'];
        if($queryData == 'share_profile')
        {
            DB::insert("Logs", ["Text" => "OK"]);
            //TelegramBot::sendMessage('Okey');
        }
    }
}