<?php namespace Project\Controllers;
use ML,categoryM,Http,Post,Folder,MigrateCategory;
class Category extends Controller
{
    public function main()
    {
        Masterpage::title(ML::select('Category'));
        View::categories(categoryM::getAllCategoryByUser());
        MigrateCategory::up();
    }
    public function create()
    {
        Masterpage::title("Create Category");
        View::allCategoryByUser(categoryM::getAllCategoryByUser());
        View::categoryImages(Folder::files('Projects/Frontend/Resources/Files/Categories'));
    }
    public function createRequest()
    {
        Http::isAjax() or exit("Bad Request");
        $category = Post::category();
        $name = Post::name();
        $picture = Post::picture();
        $type = Post::type();
        $picture = FILES_DIR.'/Categories/'.$picture;
        if($name == NULL)
        {
            echo json_encode(['error' => ML::select('AddCategoryNullNameErrorMessage')]);
            exit;
        }
        if(!categoryM::addCategory(['Name' => $name, 'Entry_Type' => $type, 'Picture' => $picture],$category))
        {
            echo json_encode(['error' => ML::select('AddCategoryUnknownErrorMessage')]);
            exit;
        }
        echo json_encode(['success' => ML::select('AddCategorySuccessMessage')]);
    }
}