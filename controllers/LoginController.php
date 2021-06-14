<?php
require_once('../models/User.php')
require_once('../models/Admin.php')
require_once('../models/Client.php')
require_once('../models/It.php')

class LoginController
{
    public function getlogin()
    {
        View::display('login');
    }
    public function getregister()
    {
        View::display('register');
    }
    public function logout()
    {
        session_destroy();
    }
    public function login($email,$password)
    {
        var $user = new User();
        $user->email = $email;
        if($user->connectByEmail()){
            try {
                $user = new Client($user->id);
                $_SESSION['usertype'] = "client";
            } catch (Error $e) {
                try{
                    $user = new It($user->id);
                    $_SESSION['usertype'] = "It";
                }catch(Error $e){
                    try {
                        $user = new Admin($user->id);
                        $_SESSION['usertype'] = "Admin";
                    } catch (Error $e) {
                        View::display('login',Array(
                            "error" => "user not found",
                        ))
                    }
                }
            }
            $_SESSION['current_user'] = $user;

        }else{
            View::display('login',Array(
                "error" => "user not found",
            ));
        }
    }

}
