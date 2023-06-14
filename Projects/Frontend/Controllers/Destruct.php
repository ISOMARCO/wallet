<?php namespace Project\Controllers;
use Session, loginM, URL;
class Destruct extends Controller
{
    public function main()
    {
        #echo DB::select('Id')->where('User', Session::Uid())->where('User_Agent', $_SERVER['HTTP_USER_AGENT'])->totalRows();
        echo Session::Uid();
        exit;
        if( Session::Uid() && loginM::checkLogout() && CURRENT_CONTROLLER != 'login' )
        {
            loginM::logout();
            redirect(URL::base("logout"));
        }
    }
}