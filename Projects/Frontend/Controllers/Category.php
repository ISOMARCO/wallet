<?php namespace Project\Controllers;
use ML,categoryM,Http,Post;
class Category extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Category'));
    }
    public function create()
    {
        Masterpage::title("Create Category");
        View::allCategoryByUser(categoryM::getAllCategoryByUser());
    }
    public function createRequest()
    {
        Http::isAjax() or exit("Bad Request");
        $category = Post::category();
        $name = Post::name();
        
    }
}