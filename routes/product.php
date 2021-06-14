<?php
require_once('controllers/ProductController.php');

Route::add('/product',function(){
    View::display('product');
});
Route::add('/product/([0-9]*)',function($var1){
    echo $var1;
    View::display('product-detail');
});