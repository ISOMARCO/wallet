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
            TelegramBot::sendMessage(' ',json_encode($keyboard));
        }
        $data = json_decode( file_get_contents("php://input"), true );
        DB::insert('Logs', ['Text' => file_get_contents("php://input")]);
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