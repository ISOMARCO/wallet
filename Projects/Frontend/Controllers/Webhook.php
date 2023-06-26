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
            TelegramBot::sendMessage([
                'reply_markup' => json_encode($keyboard),
                'text' => 'Please to share your phone from below button',
                'parse_mode' => 'HTML'
            ]);
        }
        if(isset($data->message->contact->phone_number))
        {
            DB::insert("Logs", [
                "Text" => $data->message->contact->phone_number;
            ]);
        }
    }
}