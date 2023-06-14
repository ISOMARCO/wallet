<?php namespace Project\Controllers;
use Session, loginM, URL;
class Destruct extends Controller
{
    public function main()
    {
        if( Session::Uid() && loginM::checkLogout() && CURRENT_CONTROLLER != 'login' )
        {
            loginM::logout();
            redirect(URL::base("logout"));
        }
    }
}