<?php namespace Project\Controllers;
use URL,Session,ML,MigrateUsers;
class Initialize extends Controller
{
    public function main()
    {
        ML::lang("az");
        MigrateUsers::up();
        if(!Session::id() && CURRENT_CONTROLLER != 'login' && CURRENT_CONTROLLER != 'lang') 
        {
            redirect(URL::base("login"));
        }
        Theme::active('Default');
        
        Masterpage::headPage('Sections/head')
                  ->bodyPage('Sections/body')
                  ->browserIcon(FILES_DIR . 'favicon.ico');
    }
}