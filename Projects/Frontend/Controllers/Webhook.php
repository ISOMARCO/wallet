<?php namespace Project\Controllers;
use TelegramBot, URL, DB, ML;
class Webhook extends Controller
{
    public function main()
    {
        $data = TelegramBot::getData();
        if($data->message->text == '/start')
        {
            $keyboard = array(
                "keyboard" => array(
                                array(
                                    array(
                                        "text" => "Press to share your phone",
                                        "request_contact" => true
                                    ))),
                'resize_keyboard' => true
            );
            // $markup = array(
            //     'inline_keyboard' => $keyboard
            // );
            TelegramBot::sendMessage('Paylas',json_encode($keyboard, true));
        }
        $data = json_decode( file_get_contents("php://input"), true );
        DB::insert('Logs', ['Text' => file_get_contents("php://input")." 21ci setir"]);
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