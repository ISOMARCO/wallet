<?php namespace Project\Controllers;
use Session,Cache,accountsM;
class accounts extends Controller
{
    public function main()
    {
        Masterpage::title('Accounts');
    }
    public function create()
    {
        Masterpage::title("Create");
        View::banks(accountsM::getBanks());
    }
}