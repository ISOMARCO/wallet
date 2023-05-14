<?php namespace Project\Controllers;
use ML,Post,Http,Session,loginM,DB,Cache;
class login extends Controller
{
    public function main()
    {
        if(Session::Uid())
        {
            redirect(URL::base('home'));
            exit;
        }
        Masterpage::title(ML::select('SignIn'));
        output( Cache::select('userInfo_64611c9c5cf0c_64611c9c5cf0e') );
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
        Session::insert('Uid',$login->Uid);
        echo json_encode(['success' => 'Successfully']);
    }
}