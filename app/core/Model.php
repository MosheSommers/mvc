<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/28/2018
 * Time: 9:35 AM
 */

class Model
{
    public $title;
    
    /**
     * Use this function in models views to add pieces used throughout the site i.e. header footer etc
     * @param string $block name matching layout file
     * @param Model $model  model to be used in layout files
     */
    public function addLayout(string $block, Model $model){
        include_once('../app/views/layout/'. $block .'.php');
    }
}