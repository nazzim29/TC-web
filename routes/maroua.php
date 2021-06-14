<?php
require_once('controllers/LoginController.php');

Route::add('/login',function(){
    LoginController::getlogin();
});
Route::add('/register',function(){
    LoginController::getregister();
});



Route::add('/login',function(){
    LoginController::login($_POST['uname'],$_POST['password']);
    header('Location: /');
},'POST');

Route::add('/logout',function(){
    if(isset($_SESSION['user'])){
        LoginController::logout();
        header('Location: /');
    }else{
        echo 'unauthorized';
    }
});
Route::add('/contact',function(){
    View::display('contact');
});
