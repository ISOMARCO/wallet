<?php namespace Project\Controllers;
use ML;
class Category extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Category'));
    }
    public function create()
    {
        Masterpage::title("Create Category");
    }
}