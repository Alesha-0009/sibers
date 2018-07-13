<?php

require_once 'Model.php';

/**
 * Class User
 */
class User extends Model
{
    public $mysqli;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function getUser($login,$password)
    {
        $sql = "SELECT * FROM `users` WHERE `login` = '{$login}' AND `password` = '{$password}'";
        $result = $this->mysqli->query($sql);
        return ($result->num_rows === 0) ? true : false;
    }

    /**
     * @param array $post
     * return int
     */
    public function register($post)
    {
        $password = md5($post['password']);
        $sql = "INSERT INTO `users` (name,surname,gender,date_r,login,password) 
                VALUES ('{$post['name']}','{$post['surname']}','{$post['gender']}','{$post['date_r']}','{$post['login']}','{$password}')";
        $result = $this->mysqli->query($sql);
        return $result;
    }

    /**
     * Get User List
     * @param string $page
     * @param string $offset
     * @return array
     */
    public function getListUsers($page,$offset)
    {
        if ($page == null)
        {
            $page = 1;
        }
        $users = [];
        $this_page_first_result = ($page - 1) * $offset;
        $sql = "SELECT * FROM `users` ORDER BY `date_r` LIMIT" . ' ' . $this_page_first_result . ',' . $offset;
        $result = $this->mysqli->query($sql);
        while ($row = $result->fetch_assoc())
        {
            $users[] = [
                'id' => $row['ID'],
                'login' => $row['login'],
                'password' => $row['password'],
                'name' => $row['name'],
                'surname' => $row['surname'],
                'gender' => $row['gender'],
                'date_r' => $row['date_r']
            ];
        }
        return $users;
    }

    /**
     * Get count rows
     * @return mixed
     */
    public function getCountRows()
    {
        $sql = "SELECT * FROM `users`";
        $result = $this->mysqli->query($sql);
        return $result->num_rows;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getUserById($id)
    {
        $sql = "SELECT * FROM `users` WHERE `ID` = {$id}";
        $result = $this->mysqli->query($sql);
        return $result->fetch_assoc();
    }

    /**
     * @param array $post
     */
    public function update($post)
    {
        $id = (int)$post['id'];
        $sql = "UPDATE `users` SET `name` = '{$post['name']}', `surname` = '{$post['surname']}', `gender` = '{$post['gender']}',
                `date_r`='{$post['date_r']}' WHERE `ID` = {$id}";
        $result = $this->mysqli->query($sql);
        return $result;
    }

    /**
     * @param int $id
     */
    public function delete($id)
    {
        $sql = "DELETE FROM `users` WHERE ID = {$id}";
        $result = $this->mysqli->query($sql);
        return $result;
    }
}