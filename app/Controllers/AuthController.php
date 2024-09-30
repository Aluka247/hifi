<?php  
namespace App\Controllers;
//session_start();
use App\Models\User;
use App\Core\View;
use App\Models\Video;


class AuthController{

    private $userModel;
    private $videoModel;
    
    public function __construct()
    {
        $this->userModel=new User();
        $this->videoModel=new Video();

    }



    public function loginUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // If result, that is if user exist
        $user = $this-> userModel->getUserByEmail($email);
       // die(json_encode($user));

        if(empty($user)){
            $_SESSION['errorMessage'] = "Invalid credentials";
           return View::render('auth/login', ['email' => $email,'password'=>$password]);
        }
        

        if(password_verify($password,$user['password'])){

            unset($user['password']);
            $_SESSION['username'] = $user['name'];

            $videos = $this-> videoModel->getAllVideos();
           return View::render('/dashboard', ['successMessage' => "Login successfull", 'videos' => $videos ]);

        }else{

            $_SESSION['errorMessage'] = "Invalid credentials";
            return View::render('auth/login', ['email' => $email,'password'=>$password]);
        }

    }


    function getLoginForm(){

        View::render('auth/login');
    }
}







?>