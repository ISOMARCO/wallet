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
        echo categoryM::getCategory();
        Masterpage::title("Create Category");
    }
}