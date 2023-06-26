<?php namespace Project\Controllers;
use TelegramBot, URL, DB, ML;
class Webhook extends Controller
{
    public function main()
    {
        //$data = TelegramBot::getData();
        $data = json_decode( file_get_contents("php://input"), true );
        $chatId = $data['message']['chat']['id'];
        if($data['message']['text'] == '/start')
        {
            DB::insert("Logs", ["Text" => "OKEY"]);
            /*$keyboard = array(
                "keyboard" => array(
                                array(
                                    array(
                                        "text" => "Press to share your phone",
                                        "request_contact" => true
                                    ))),
                'resize_keyboard' => true
            );
            TelegramBot::sendMessage([
                'chat_id' => $chatId,
                'reply_markup' => json_encode($keyboard),
                'text' => 'Please to share your phone from below button',
                'parse_mode' => 'HTML'
            ]);*/
        }
        if(isset($data->message->contact->phone_number))
        {
            TelegramBot::sendMessage([
                'chat_id' => $chatId,
                'text' => 'Registered',
                'reply_to_message_id' => $data->message->message_id,
                'parse_mode' => 'HTML'
            ]);
        }
    }
}