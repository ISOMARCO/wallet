<?php namespace Project\Controllers;
use URL,Session;
class Initialize extends Controller
{
    public function main()
    {
        if(!Session::id() && CURRENT_CONTROLLER != 'login') 
        {
            redirect(URL::base("login"));
        }
        # The theme is activated.
        # Location: Resources/Themes/Default/
        Theme::active('Default');
        
        # The current settings are being configured.
        Masterpage::headPage('Sections/head')
                  ->bodyPage('Sections/body')
                  ->browserIcon(FILES_DIR . 'favicon.ico');
    }
}