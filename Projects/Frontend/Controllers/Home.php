<?php namespace Project\Controllers;
use URL, loginM;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        $socket = fsockopen('127.0.0.1', 8000, $errno, $errstr, 10);
        if (!$socket) 
        {
            echo "Soket bağlantısı başarısız: $errstr ($errno)";
        } 
        else 
        {
            fwrite($socket, "Merhaba, sunucu!");
            echo "Sunucuya veri gönderildi: Merhaba, sunucu!";
            $response = fgets($socket);
            echo "Sunucudan gelen yanıt: $response";
            fclose($socket);
        }
    } 
    public function exit($all = NULL)
    {
        loginM::logout($all);
        redirect(URL::base('login'));
        exit;
    }
    public function s404()
    {
        Masterpage::title('404 File Not Found!');
    }
}