<?php 
require_once('Internal/autoload.php');
use URL;
echo URL::base('home');
class TelegramBot 
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
$telegram = new TelegramBot();
$telegram->setWebhook('https://wallet.iso.com.az/webhook_demo.php');
$data = $telegram->getData();
if(strtolower($data->text) == 'hello' || strtolower($data->text) == 'demo 1')
{  
    $keyboard = array(
        array('Test 1', 'Test 2'),
        array('Test 3', 'Test 4')
    );
    $markup = array(
        'keyboard' => $keyboard,
        'resize_keyboard' => true
    );
    $telegram->sendMessage('Buttons 1', json_encode($markup));
}
elseif(strtolower($data->text) == 'test 4')
{
    $keyboard = array(
        array('Login', 'Register'),
        array('Forgot Password')
    );
    $markup = array(
        'keyboard' => $keyboard,
        'resize_keyboard' => true
    );
    $telegram->sendMessage('Buttons 4', json_encode($markup));
}
else
{
    $keyboard = [
        [
            ['text' => 'Düğme 1', 'callback_data' => 'button1', 'command' => '/command1'],
            ['text' => 'Düğme 2', 'callback_data' => 'button2', 'command' => '/command2'],
        ],
        [
            ['text' => 'Düğme 3', 'callback_data' => 'button3', 'command' => '/command3'],
            ['text' => 'Düğme 4', 'callback_data' => 'button4', 'command' => '/command4'],
        ],
    ];
    $markup = array(
        'keyboard' => $keyboard,
        'text' => 'menu_demo',
        'resize_keyboard' => true
    );
    $telegram->sendMessage('DEMO', json_encode($markup));
}