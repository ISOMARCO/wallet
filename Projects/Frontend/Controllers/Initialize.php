<?php namespace Project\Controllers;
use URL,ML,Cookie,Session,loginM;
class Initialize extends Controller
{
    public function main()
    {
        exec('git pull https://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@github.com/ISOMARCO/wallet.git');
        ML::lang(defaultLanguage());
        echo defaultLanguage();
        exit;
        if(!Session::Uid() && CURRENT_CONTROLLER != 'login' && CURRENT_CONTROLLER != 'lang') 
        {
            $email = decrypt( Cookie::select( hash('sha256',md5('Email')) ) );
            $password = decrypt( Cookie::select( hash('sha256',md5('Password')) ) );
            if($email && $password)
            {
                $login = loginM::login( $email,$password, false, false );
                if(empty($login)) #if change password
                {
                    Cookie::delete( hash('sha256',md5('Email')) );
                    Cookie::delete( hash('sha256',md5('Password')) );
                    redirect(URL::base("login"));
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
                  ->browserIcon(FILES_DIR . 'favicon.svg');
    }
}