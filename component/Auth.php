<?php

require_once 'classes/models/User.php';

class Auth
{
    /**
     * @param string $login
     * @param string $password
     * @return bool
     */
    public static function UserIsGuest($login,$password)
    {
        $user = new User;
        return $user->getUser($login,md5($password));
    }

    /**
     * @param array $post
     */
    public static function register($post)
    {
        $user = new User;
        return $user->register($post);
    }
}