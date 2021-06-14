<?php
/* Smarty version 3.1.39, created on 2021-06-01 17:54:04
  from 'C:\Users\Pedagogie\Desktop\TC web\Views\layout\loginmodel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b6581cb66a99_20934928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b54afbf2ce7467fde2a30fb6ab97f97a737202' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\TC web\\Views\\layout\\loginmodel.tpl',
      1 => 1622554416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b6581cb66a99_20934928 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="/login" method="POST">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="register">Register now!</a>
            </div>
          </form>
        </div>                        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><?php }
}
