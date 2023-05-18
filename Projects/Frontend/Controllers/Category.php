<?php namespace Project\Controllers;

class Category extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Category'));
    }
}