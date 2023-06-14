<?php namespace Project\Controllers;
use Session, loginM, URL;
class Destruct extends Controller
{
    public function main()
    {
        echo DB::where('User', Session::Uid())->where('User_Agent', $_SERVER['HTTP_USER_AGENT'])->Sessions()->stringQuery();
        exit;
        if( Session::Uid() && loginM::checkLogout() && CURRENT_CONTROLLER != 'login' )
        {
            loginM::logout();
            redirect(URL::base("logout"));
        }
    }
}