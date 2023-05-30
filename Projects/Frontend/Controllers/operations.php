<?php namespace Project\Controllers;
use ML;
class operations extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Operations'));
    }
    public function create()
    {
        Masterpage::title(ML::select('CreateOperations'));
    }
}