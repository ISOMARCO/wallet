<?php namespace Project\Controllers;
use ML,Post,Http,URL;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
        echo URL::base('login');
        exit;
    }
    public function loginRequest()
    {
        Http::isAjax() or exit("Bad Request");
        $email = Post::email();
        $password = Post::password();
        echo json_encode(['success' => 'Okey']);
    }
}