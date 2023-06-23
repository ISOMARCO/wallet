<?php namespace Project\Controllers;

class Webhook extends Controller
{
    public function set()
    {
        $bot_api_key  = 'your:bot_api_key';
        $bot_username = 'iSmile';
        $hook_url     = URL::base('Webhook/hook');
        try 
        {
            // Create Telegram API object
            $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);
            // Set webhook
            $result = $telegram->setWebhook($hook_url);
            if ($result->isOk()) 
            {
                echo $result->getDescription();
            }
        } catch (Longman\TelegramBot\Exception\TelegramException $e) 
        {
            // log telegram errors
            // echo $e->getMessage();
        }
    }
    public function hook()
    {
        $bot_api_key  = 'your:bot_api_key';
        $bot_username = 'username_bot';

        try {
            // Create Telegram API object
            $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

            // Handle telegram webhook request
            $telegram->handle();
        } catch (Longman\TelegramBot\Exception\TelegramException $e) {
            // Silence is golden!
            // log telegram errors
            // echo $e->getMessage();
        }
    }
}