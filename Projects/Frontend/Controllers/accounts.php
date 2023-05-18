<?php namespace Project\Controllers;
use Http,accountsM,MigrateSubCategory;
class accounts extends Controller
{
    public function main()
    {
        Masterpage::title('Accounts');
        View::accounts(accountsM::getUserAccounts());
        MigrateSubCategory::up();
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