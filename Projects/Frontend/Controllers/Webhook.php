<?php namespace Project\Controllers;
use URL, DB, ML;
class Webhook extends Controller
{
    const API_URL = 'https://api.telegram.org/bot';
    public $token = '5534810537:AAEfTCYFMsg1qmPsxk3t6Rmnc3Jp8yqurD0';
    public $chatId = NULL;
    public function main()
    {
        $this->getData();
        $data = json_decode($this->selectFromDB(), true);
        #$chatId = $data['message']['chat']['id'];
        if($data['message']['text'] == '/start')
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
            $this->sendMessage([
                'chat_id' => $chatId,
                'reply_markup' => json_encode($keyboard),
                'text' => 'Please to share your phone from below button',
                'parse_mode' => 'HTML'
            ]);
        }
        if(isset($data['message']['contact']['phone_number']))
        {
            $this->sendMessage([
                'chat_id' => $chatId,
                'text' => 'Sagol'
            ]);
        }

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
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $count = 0;
        while ($httpCode == 301 || $httpCode == 302) {
            if($count == 100) break;
            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $header = substr($response, 0, $headerSize);
            preg_match('/Location:(.*?)\n/', $header, $matches);
            $redirectUrl = trim(array_pop($matches));

            curl_setopt($ch, CURLOPT_URL, $redirectUrl);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $count++;
        }
        if (curl_errno($ch)) {
            return 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return json_decode($result);
    }

    public function getData()
    {
        $data = json_decode( file_get_contents("php://input"), true );
        $this->chatId = $data['message']['chat']['id'];
        DB::insert('Logs', ['Text' => json_encode($data)]);
        return $data;
    }

    public function setWebhook($url)
    {
        return $this->request('setWebhook', [
            'url' => $url
        ]);
    }

    public function sendMessage($data = [])
    {
        if(!isset($data['chat_id'])) $data['chat_id'] = $this->chatId;
        return $this->request('sendMessage', $data);
    }

    public function selectFromDB()
    {
        $data = DB::orderBy()->Logs()->row()->Text;
        return $data;
    }
}