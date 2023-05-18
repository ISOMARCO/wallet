<?php namespace Project\Controllers;
use Http,accountsM,MigrateSub_Category;
class accounts extends Controller
{
    public function main()
    {
        Masterpage::title('Accounts');
        View::accounts(accountsM::getUserAccounts());
        MigrateSub_Category::up();
    }
    public function create()
    {
        Masterpage::title("Create");
        View::banks(accountsM::getBanks());
    }
    public function createAccount()
    {
        Http::isAjax() or exit("Bad Request");
        
    }
}