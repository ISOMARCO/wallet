<?php namespace Project\Controllers;
use ML,categoryM,Http,Post,DB;
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
        output(DB::select('Uid')->where('Uid','646e5abe3d0c3_646e5abe3d0c4')->Category()->row()->Uid);
    }
    public function createRequest()
    {
        Http::isAjax() or exit("Bad Request");
        $category = Post::category();
        $name = Post::name();
        if($name == NULL)
        {
            echo json_encode(['error' => 'Ad bos buraxila bilmez']);
            exit;
        }
        echo json_encode([ 'error' =>categoryM::addCategory(['Name' => $name],$category) ]);
    }
}