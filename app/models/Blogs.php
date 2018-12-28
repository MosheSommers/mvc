<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/26/2018
 * Time: 4:30 PM
 */
class Blogs extends Model
{
    public $blogs;
    public function __construct (Blog $blog = null)
    {
        if($blog != null){
            $this->addBlog($blog);
        }
        $this->blogs = $this->getBlogs((new BlogData())->getBlogs());
    }

    private function getBlogs(array $blogs){
        require_once '../app/models/Blog.php';
        foreach ($blogs as $blog) {
            yield new Blog($blog['author'],$blog['header'], $blog['post'],$blog['id']);
        }
    }

    private function addBlog($blog){
        echo 'hit0';
        (new BlogData())->addBlog($blog);
    }
}