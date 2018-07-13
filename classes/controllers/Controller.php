<?php

class Controller
{
    public function view($views,$data = [])
    {
        extract($data);
        include VIEW . $views . '.php';
    }
}