<?php
/* Smarty version 3.1.39, created on 2021-05-18 17:31:19
  from 'C:\Users\Pedagogie\Desktop\TC web\Views\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a3ddc74f6200_19979224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b8726410359df6e01d59eb32b8f2b3bc700bf0e' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\TC web\\Views\\layout\\header.tpl',
      1 => 1621351877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3ddc74f6200_19979224 (Smarty_Internal_Template $_smarty_tpl) {
?>  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="\img/flag/french.jpg" alt="english flag">FRENCH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="\img/flag/french.jpg" alt="">FRENCH</a></li>
                      <li><a href="#"><img src="\img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                      <li><a href="#"><i class="fa fa-dn"></i>DA</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>06-74-70-34-04</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user']))) {?>
                  <li><a href="account.php">My Account</a></li>
                  <li class="hidden-xs"><a href="wishlist.php">Wishlist</a></li>
                  <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                  <?php }?>
                  <li><a <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user']))) {?>href="/logout"> Logout <?php } else { ?> data-toggle="modal" data-target="#login-modal"> Login<?php }?> </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span class="fa fa-shopping-cart"></span>
                  <p>D<strong>Y</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.php"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user']))) {?>
                <div class="aa-cartbox">
                  <a class="aa-cart-link" href="#">
                    <span class="fa fa-shopping-basket"></span>
                    <span class="aa-cart-title">SHOPPING CART</span>
                    <span class="aa-cart-notify">3</span>
                  </a>
                  <div class="aa-cartbox-summary">
                    <ul>
                      <li>
                        <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="#">Product Name</a></h4>
                          <p>1 x $250</p>
                        </div>
                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                      </li>
                      <li>
                        <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="#">Product Name</a></h4>
                          <p>1 x $250</p>
                        </div>
                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                      </li>                    
                      <li>
                        <span class="aa-cartbox-total-title">
                          Total
                        </span>
                        <span class="aa-cartbox-total-price">
                          $500
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              <?php }?>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header><?php }
}
