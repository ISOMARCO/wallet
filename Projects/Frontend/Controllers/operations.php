<?php namespace Project\Controllers;
use ML,categoryM;
class operations extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Operations'));
    }
    public function create()
    {
        Masterpage::title(ML::select('CreateOperations'));
        View::allCategoryByUser(categoryM::getAllCategoryByUser());
    }
}