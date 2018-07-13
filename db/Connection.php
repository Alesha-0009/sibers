<?php

/**
 * DataBase Connection...
 * Class Connection
 */
class Connection
{
    public $mysqli;

    public function __construct()
    {
        //Mysql connection
        $this->mysqli = new mysqli(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);

        //if exists error exit
        if (mysqli_connect_errno()){
            printf('Connection to the MySQL server is not possible: %s\n', mysqli_connect_error());
            exit;
        }
    }
}