<?php namespace Project\Controllers;
use Session, loginM, URL;
class Destruct extends Controller
{
    public function main()
    {
        if( Session::Uid() && loginM::checkLogout() )
        {
            loginM::logout();
            redirect(URL::base("logout"));
            echo 'ok';
        }
    }
}