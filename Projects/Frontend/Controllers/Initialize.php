<?php namespace Project\Controllers;
use URL,ML,Cookie,Session,loginM;
class Initialize extends Controller
{
    public function main()
    {
        ML::lang("az");
        exit(Session::Uid());
        if(!Session::Uid() && CURRENT_CONTROLLER != 'login' && CURRENT_CONTROLLER != 'lang') 
        {
            if(Cookie::select(hash('sha256',md5('Email'))) && Cookie::select(hash('sha256',md5('Password'))))
            {
                $login = loginM::login( Cookie::select(hash('sha256',md5('Email'))), Cookie::select(hash('sha256',md5('Password'))) );
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
        else 
        {
            redirect(URL::base('home'));
        }
        Theme::active('Default');
        
        Masterpage::headPage('Sections/head')
                  ->bodyPage('Sections/body')
                  ->browserIcon(FILES_DIR . 'favicon.ico');
    }
}