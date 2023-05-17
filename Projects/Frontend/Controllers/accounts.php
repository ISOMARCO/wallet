<?php namespace Project\Controllers;
use Session,Cache,accountsM;
class accounts extends Controller
{
    public function main()
    {
        Masterpage::title('Accounts');
        #accountsM::addBank(['Code' => 'RABITABANK','Name' => 'Rabitə Bank', 'Picture' => 'rabitabank.svg', 'Style' => 'width:30px;height:30px;']);
    }
    public function create()
    {
        Masterpage::title("Create");
        View::banks(accountsM::getBanks());
    }
}