<?php namespace Project\Controllers;
use ML,Post,Http,Session,loginM,DB;
class login extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('SignIn'));
        echo hash('sha256',md5('ismayil'));
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
        $login = loginM::login($email,$password);
        if(empty($login))
        {
            echo json_encode(['error' => ML::select('LoginAuthenticationError')]);
            exit;
        }
        Session::insert('Uid',$login->Uid);
    }
}