<?php

require_once 'Controller.php';
require_once 'component/Auth.php';
require_once 'config/config.php';

/**
 * Class HomeController
 */
class HomeController extends Controller
{

    /**
     * action index
     */
    public function index()
    {
        return parent::view('index');
    }

    /**
     * action auth
     */
    public function auth()
    {
        $login = ($_POST['login']) ? $_POST['login'] : '';
        $password = ($_POST['password']) ? $_POST['password'] : '';

        if(Auth::UserIsGuest($login,$password))
        {
            return parent::view('register');
        }else{
            return header("Location:http://" . DOMAINS .'home/users');
        }
    }

    /**
     * action register
     */
    public function register()
    {
        return  (Auth::register($_POST))
            ? header("Location:http://" . DOMAINS .'home/users')
            : header("Location:http://" . DOMAINS .'home/index');
    }

    /**
     * action user list
     * @param string $page
     */
    public function users($page = null)
    {
        $user = new User;
        $users = $user->getListUsers($page,6);

        return parent::view('list',[
            'users' => $users,
            'page' => $page
        ]);
    }

    /**
     * @param string $id
     */
    public function show($id)
    {
        $id = (int)$id;
        $user = new User;
        $userById = $user->getUserById($id);
        return parent::view('info',[
           'user' => $userById
        ]);
    }

    /**
     * action add
     */
    public function add()
    {
        return parent::view('add');
    }

    /**
     * action update
     * @param string $id
     */
    public function update($id)
    {
        $id = (int)$id;
        $user = new User;
        $userById = $user->getUserById($id);

        if (!empty($_POST))
        {
           $user->update($_POST);
           return header("Location:http://" . DOMAINS .'home/users');
        }

        return parent::view('update',[
            'user' => $userById
        ]);
    }

    /**
     * action delete
     * @param string $id
     */
    public function delete($id)
    {
        $id = (int)$id;
        $user = new User;
        if ($user->delete($id))
        {
            return header("Location:http://" . DOMAINS .'home/users');
        }
    }
}