<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/26/2018
 * Time: 4:16 PM
 */

class BlogData extends Dal {
    function addBlog(Blog $blog){
        $dbc = $this->connectToDb();
        $query = "INSERT INTO blog_posts (author, header, post) VALUES(?, ?, ?)";
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt, 'sss', $blog->author, $blog->header, $blog->post);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if($affected_rows == 1){
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
            return true;
        }else{
            echo mysqli_error($dbc);
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
            return false;
        }
    }

    function deleteBlog($id){
        $dbc = $this->connectToDb();
        $query = "DELETE FROM  blog_posts where id = ?";
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt, 's', $id);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if($affected_rows == 1){
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
            return true;
        }else{
            echo mysqli_error($dbc);
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
            return false;
        }
    }
    function getBlogs (){
        $dbc = $this->connectToDb();
        $query = 'SELECT id, author, header,post  FROM blog_posts';
        $response = @mysqli_query($dbc, $query);

        $blogs = [];
        if($response){
            while($row = mysqli_fetch_array($response)){
                $blogs[] = array(
                    'author' => $row['author'],
                    'header' => $row['header'],
                    'post' => $row['post'],
                    'id' => $row['id']
                );
            }
        }else{
            echo 'something went wrong.' . mysqli_error($dbc);
        }
        mysqli_close($dbc);
        return $blogs;
    }
}