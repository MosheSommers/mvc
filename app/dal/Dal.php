<?php
/**
 * Created by PhpStorm.
 * User: msomm
 * Date: 12/28/2018
 * Time: 11:06 AM
 */

class Dal
{
    /**
     * @return mysqli object
     */
    public function connectToDb(){
        require_once('../../../mysqli_connect.php');
        $dbc =  mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR dies('Could not connect to MySql: ' . mysqli_connect_error());
        return $dbc;
    }

}