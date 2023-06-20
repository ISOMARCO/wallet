<?php namespace Project\Controllers;
use URL, loginM;
class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Home');
        $socket = fsockopen('ssl://wallet.iso.com.az', 8000, $errno, $errstr, 10);
        if (!$socket) 
        {
            echo "Socket connection failed: $errstr ($errno)";
        } 
        else 
        {
            fwrite($socket, "Hello, server!");
            echo "Data sent to the server: Hello, server!";
            while (!feof($socket)) 
            {
                $response = fgets($socket);
                echo "Data received from the server: $response";
            }
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