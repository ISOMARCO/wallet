<?php namespace Project\Controllers;
use Session, loginM, URL;
class Destruct extends Controller
{
    public function main()
    {
        exit();
        if( Session::Uid() && loginM::checkLogout() )
        {
            loginM::logout();
            redirect(URL::base("logout"));
        }
    }
}