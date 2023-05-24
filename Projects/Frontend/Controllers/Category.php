<?php namespace Project\Controllers;
use ML,categoryM;
class Category extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Category'));
    }
    public function create()
    {
        Masterpage::title("Create Category");
        View::allCategoryByUser(categoryM::getAllCategoryByUser('main'));
    }
}