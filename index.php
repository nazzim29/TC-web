<?php
session_start();
require_once('libs\Route.php');
require_once('Views\View.php');


require_once('routes\maroua.php');
require_once('routes\user.php');
require_once('routes\product.php');



Route::add('/',function(){
    View::display('index');
});

Route::run();