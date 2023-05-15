<?php namespace Project\Controllers;
use Session,Cache;
class accounts extends Controller
{
    public function main()
    {
        Masterpage::title('Accounts');
    }
    public function create()
    {
        Masterpage::title("Create");
    }
}