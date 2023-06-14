<?php namespace Project\Controllers;
use URL, ML, Cookie, Session,loginM, systemSettingsM, Post, Http, translationM;
class Initialize extends Controller
{
    public function main()
    {
        exec('git pull https://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@github.com/ISOMARCO/wallet.git');
        $defaultLanguage = defaultLanguage();
        ML::lang($defaultLanguage);
        View::defaultLanguage($defaultLanguage);
        View::languages(translationM::getAllLanguages());
        if(loginM::checkLogout() == true) 
        {
            redirect(URL::base("Home/exit"));
        }
        if(!Session::Uid() && CURRENT_CONTROLLER != 'login') 
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
    public function changeDefaultLanguageRequest()
    {
        Http::isAjax() or exit("Bad Request");
        $lang = Post::lang();
        echo json_encode(['success' => systemSettingsM::updateDefaultLanguage($lang)]);
    }
}