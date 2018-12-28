<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/24/2018
 * Time: 3:52 PM
 */

class Controller
{
    public function model($model, array $args = null){
        require_once '../app/models/' . $model . '.php';
        if($args != null){
            return new $model(...$args);
        }
        return new $model();
    }

    public function view($view, $model){
        require_once '../app/views/' .$view . '.php';
    }

    public function redirect($path, $statusCode = 303)
    {
        $url = $_SERVER['REQUEST_SCHEME'] . '://'. $_SERVER['SERVER_NAME'] .
            '/mvc/public/' . $path . '/';
        header('Location: ' . $url, true, $statusCode);
        die();
    }
}