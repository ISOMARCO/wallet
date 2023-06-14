<?php namespace Project\Controllers;
use Session, loginM;
class Destruct extends Controller
{
    public function main()
    {
        echo Session::Uid()." ".loginM::checkLogout();
    }
}