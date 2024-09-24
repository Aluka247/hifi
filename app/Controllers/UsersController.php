<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\User;
use App\Models\Video;

class UsersController 
{
  private $userModel;
  private $video;

    public function __construct()
    {
        $this->userModel=new User();
        $this->video=new Video();
    }

    /**
     * Displays all users.
     */
    public function index()
    {
        $users = $this->userModel->getAllUsers();
        //$level="JSS1";
        View::render('users/index', ['users' => $users  //,'level'=>$level
    ]);
    }

    /**
     * Displays the form to create a new user.
     */
    public function create()
    {
        // $Users = $this->user->getAllUsers();
        // $levels = $this->level->getAllLevels();
        View::render('users/create', //['courses'=>$Users]
    );
    }

    /**
     * Stores a new user in the database.
     */
    public function store()
    {
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
        ];
       // die(json_encode($data));
        $this->userModel->addUser($data);
        header('Location:/hifi/users');
    }

    /**
     * Displays the form to edit a user.
     */
    public function edit()
    {
        $id = $_GET['id'];
        // $users = $this->user->getAllUsers();
        // $levels = $this->level->getAllLevels();

        //die($id);
        $user = $this->userModel->getUserById($id);
        View::render('users/edit', ['user' => $user ]);
    }

    /**
     * Updates a user in the database.
     */

    public function update()
    {
        $id = $_POST['id'];
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
        ];


   // die(json_encode($data));
        $this->userModel->updateUser($id, $data);
        header('Location: /hifi/users');
    }

    /**
     * Deletes a user from the database.
     */
    public function delete()
    {
        $id = $_POST['id'];
        $this->userModel->deleteUser($id);
        header('Location: /hifi/users');
    }
    
}
