<?php namespace Project\Controllers;

class Home extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Category'));
    }
}