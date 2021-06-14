<?php
/* Smarty version 3.1.39, created on 2021-05-18 15:21:39
  from 'C:\Users\Pedagogie\Desktop\TC web\Views\layout\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a3bf63a91aa8_13524852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57c420fe09db66d81b77d4a05cac3201d13fe3a0' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\TC web\\Views\\layout\\login.tpl',
      1 => 1621344097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3bf63a91aa8_13524852 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
    <div >
        <div class="modal-dialog">
            <div class="modal-content">                      
                <div class="modal-body">
                    <h4>Login or Register</h4>
                    <form class="aa-login-form" action="/login" method="POST">
                        <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                            <div class="alert alert-danger">
                                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 
                            </div>
                        <?php }?>
                        <label for="">Username or Email address<span>*</span></label>
                        <input type="text" placeholder="Username or email">
                        <label for="">Password<span>*</span></label>
                        <input type="password" placeholder="Password">
                        <button class="aa-browse-btn" type="submit">Login</button>
                        <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                        <div class="aa-register-now">
                        Don't have an account?<a href="register.php">Register now!</a>
                        </div>
                    </form>
                </div>                        
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

  <!-- jQuery library -->
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>  
    
</body>
</html><?php }
}
