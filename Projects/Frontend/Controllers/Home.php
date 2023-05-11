<?php namespace Project\Controllers;

class Home extends Controller
{
    public function main(string ...$parameters)
    {
        Masterpage::title('Welcome to The World of Simplicity2');
    } 
    public function s404()
    {
        Masterpage::title('404! File Not Found');
    }
}