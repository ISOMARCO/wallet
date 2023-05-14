<?php namespace Project\Controllers;
use ML,Post,Http;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
    }
    public function loginRequest()
    {
        Http::isAjax() or exit("Bad Request");
        $email = Post::email();
        $password = Post::password();
        if(empty($email) || empty($password))
        {
            echo json_encode(['error' => ML::select('LoginNullError')]);
            exit;
        }

    }
}