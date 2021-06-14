<?php
require_once('controllers/UserController.php');

Route::add('/register',function(){
    UserController::register();
},'POST');

Route::add('/mycart',function(){
    UserController::cartindex();
});
Route::add('/myaccount',function(){
   UserController::getuser($_SESSION['user']['id']); 
});
