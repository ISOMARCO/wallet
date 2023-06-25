<?php 

class InternalTelegramBot 
{
    const API_URL = 'https://api.telegram.org/bot';
    public $token = '5534810537:AAEfTCYFMsg1qmPsxk3t6Rmnc3Jp8yqurD0';
    public $chatId = NULL;

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function request($method, $posts = [])
    {
        $url = self::API_URL.$this->token.'/'.$method;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($posts));

        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }

    public function setWebhook($url)
    {
        return $this->request('setWebhook', [
            'url' => $url
        ]);
    }

    public function getWebhookInfo()
    {
        return $this->request('getWebhookInfo');
    }

    public function getData()
    {
        $data = json_decode( file_get_contents("php://input") );
        $this->chatId = $data->message->chat->id;
        return $data->message;
    }

    public function getCallBackQueryData()
    {
        $data = json_decode( file_get_contents("php://input") );
        $callBackQuery = $data->callback_query;
        $this->chatId = $callBackQuery->message->chat->id;
        return $callBackQuery->data;
    }

    public function sendMessage($message = NULL, $markup = NULL)
    {
        return $this->request('sendMessage', [
            'chat_id' => $this->chatId,
            'text' => $message,
            'reply_markup' => $markup
        ]);
    }

    public function InlineKeyboardButton()
    {
        return $this->request('InlineKeyboardButton', [
            'text' => 'Login',
            'callback_data' => 'Men buna basmaq istedim'
        ]);
    }
}