<?php namespace Project\Controllers;
use Session, loginM, URL;
class Destruct extends Controller
{
    public function main()
    {
        echo Session::Uid()." ".loginM::checkLogout();
        exit;
        if( Session::Uid() && loginM::checkLogout() && CURRENT_CONTROLLER != 'login' )
        {
            loginM::logout();
            redirect(URL::base("logout"));
        }
    }
}