<?php namespace Project\Controllers;
use ML,categoryM,MigrateOperations;
class operations extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Operations'));
        #MigrateOperations::down();
        MigrateOperations::up();
    }
    public function create()
    {
        Masterpage::title(ML::select('CreateOperations'));
        View::allCategoryByUser(categoryM::getAllCategoryByUser());
    }
}