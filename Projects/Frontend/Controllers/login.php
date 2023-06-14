<?php namespace Project\Controllers;
use ML,Post,Http,Session,loginM;
class login extends Controller
{
    public function main()
    {
        echo Session::Uid();
        exit;
        if(Session::Uid())
        {
            redirect(URL::base('home'));
            exit;
        }
        Masterpage::title(ML::select('SignIn'));
    }
    public function loginRequest()
    {
        Http::isAjax() or exit("Bad Request");
        $email = Post::email();
        $password = Post::password();
        $rememberMe = Post::rememberMe();
        if(empty($email) || empty($password))
        {
            echo json_encode(['error' => ML::select('LoginNullError')]);
            exit;
        }
        $login = loginM::login($email,$password,$rememberMe);
        if(empty($login))
        {
            echo json_encode(['error' => ML::select('LoginAuthenticationError')]);
            exit;
        }
        echo json_encode(['success' => ML::select('LoginSuccessfully')]);
    }
}