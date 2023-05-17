<?php namespace Project\Controllers;
use accountsM,MigrateAccount;
class accounts extends Controller
{
    public function main()
    {
        Masterpage::title('Accounts');
        View::accounts(accountsM::getUserAccounts());
        MigrateAccount::up();
        #accountsM::addAccount(['Name' => 'Rabita Bank', 'Bank_Code' => 'RABITABANK']);
        #accountsM::addBank(['Code' => 'KAPITALBANK','Name' => 'Kapital Bank', 'Picture' => 'birbank.png', 'Style' => 'width:30px;height:30px;']);
    }
    public function create()
    {
        Masterpage::title("Create");
        View::banks(accountsM::getBanks());
    }
}