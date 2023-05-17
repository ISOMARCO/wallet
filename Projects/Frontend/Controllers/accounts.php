<?php namespace Project\Controllers;
use Http,accountsM,MigrateAccount;
class accounts extends Controller
{
    public function main()
    {
        Masterpage::title('Accounts');
        MigrateAccount::up();
        View::accounts(accountsM::getUserAccounts());
        #accountsM::addAccount(['Name' => 'Rabita Bank', 'Bank_Code' => 'RABITABANK','type' => 'debit','credit_amount' => '800']);
        #accountsM::addBank(['Code' => 'KAPITALBANK','Name' => 'Kapital Bank', 'Picture' => 'birbank.png', 'Style' => 'width:30px;height:30px;']);
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