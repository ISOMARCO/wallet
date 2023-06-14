<?php namespace Project\Controllers;
use Session, loginM, URL, DB;
class Destruct extends Controller
{
    public function main()
    {
        echo DB::where('User', '64611c9c5cf0c_64611c9c5cf0e')->where('User_Agent', $_SERVER['HTTP_USER_AGENT'])->Sessions()->totalRows();
        exit;
        if( Session::Uid() && loginM::checkLogout() && CURRENT_CONTROLLER != 'login' )
        {
            loginM::logout();
            redirect(URL::base("logout"));
        }
    }
}