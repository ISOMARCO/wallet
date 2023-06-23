<?php 

class InternalTelegramBot 
{
    const API_URL = 'https://api.telegram.org/bot/';
    public $token = '5534810537:AAEfTCYFMsg1qmPsxk3t6Rmnc3Jp8yqurD0';

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function showUrl()
    {
        return $this->token;
    }
}