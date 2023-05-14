<?php namespace Project\Controllers;
use ML;
class lang extends Controller
{
    public function main()
    {
        ML::insert('en','LoginAuthenticationError','Email or password is not true.');
        ML::insert('az','LoginAuthenticationError','Email və ya şifrə yanlışdır.');
        output(ML::selectAll());
    }
}