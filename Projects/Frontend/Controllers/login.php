<?php namespace Project\Controllers;
use ML,Post,Http;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
        echo $_SERVER['SERVER_PORT'].' '.$_SERVER['HTTPS'];exit;
    }
    public function loginRequest()
    {
        Http::isAjax() or exit("Bad Request");
        $email = Post::email();
        $password = Post::password();
        echo json_encode(['success' => 'Okey']);
    }
}