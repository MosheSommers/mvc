<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/26/2018
 * Time: 4:18 PM
 */

class Blog extends Model
{
    public $author;
    public $header;
    public $post;
    public $id;

    public function __construct ($author = null, $header = null, $post = null, $id = null)
    {
        $this->author = $author;
        $this->header = $header;
        $this->post = $post;
        $this->id = $id;
    }

    public function addBlog(){
        (new BlogData())->addBlog($this);
    }

    public function deleteBlog(){
        (new BlogData())->deleteBlog($this->id);
    }
}