<?php namespace Project\Controllers;
use URL,ML,Cookie,Session,loginM;
class Initialize extends Controller
{
    public function main()
    {
        ML::lang("az");
        if(!Session::Uid() && CURRENT_CONTROLLER != 'login' && CURRENT_CONTROLLER != 'lang') 
        {
            $email = Cookie::select( hash('sha256',md5('Email')) );
            $password = Cookie::select( hash('sha256',md5('Password')) );
            if($email && $password)
            {
                $login = loginM::login( $email,$password );
                if(empty($login))
                {
                    Cookie::delete( hash('sha256',md5('Email')) );
                    Cookie::delete( hash('sha256',md5('Password')) );
                    redirect(URL::base("login"));
                }
                else 
                {
                    Session::insert('Uid',$login->Uid);
                }
            }
            else 
            {
                redirect(URL::base("login"));
            }
        }
        Theme::active('Default');
        
        Masterpage::headPage('Sections/head')
                  ->bodyPage('Sections/body')
                  ->browserIcon(FILES_DIR . 'favicon.ico');
    }
}