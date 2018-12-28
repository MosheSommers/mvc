<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/27/2018
 * Time: 10:27 AM
 */

class BlogController extends Controller
{
    public function index(){
        $model = $this->model('Blogs');
        $model->title = 'blog';
        $this->view('blog/posts', $model);
    }

    public function create(Blog $model = null){
        if($model == null){
            $model = $this->model('Blog');
        }
        $model->title = 'blog';
        $this->view('blog/create', $model);
    }

    public function addPost(){
        if($_POST){
            $blog = $this->model('Blog',array($_POST['author'], $_POST['header'], $_POST['post']));
            if($_POST['author'] != ''  && $_POST['header'] != '' && $_POST['post'] != ''){
                $_POST = array();
                $blog->addBlog();
            }else{
                $this->create($blog);
                return;
            }
        }
        $this->redirect('blog/index');
    }

    public function deletePost($id = null){
        (new BlogData())->deleteBlog($id);
        $this->redirect('blog/index');
    }
}
