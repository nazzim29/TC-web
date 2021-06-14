<?php
/* Smarty version 3.1.39, created on 2021-06-01 16:31:11
  from 'C:\Users\Pedagogie\Desktop\TC web\Views\layout\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b644af9bf662_70043686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13abced7546a1da2e5be22b1dd01122f5f208a67' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\TC web\\Views\\layout\\register.tpl',
      1 => 1622557869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60b644af9bf662_70043686 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop | Account Page</title>

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="\css/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>

    <!-- wpf loader Two -->
    <div id="wpf-loader-two">
        <div class="wpf-loader-two-inner">
            <span>Loading</span>
        </div>
    </div>
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- / header section -->
    <!-- menu -->
    <section id="menu">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Left nav -->
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Men <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Standard</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">Jeans</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Women <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li><a href="#">Casual</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Formal</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Shoes</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Kids <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Standard</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">Jeans</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Sports</a></li>

                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>
    <!-- / menu -->

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Account Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-myaccount-area">
                        <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                            </div>
                        <?php }?>
                            <div class="row">
                                <form action="" method="POST" class="aa-login-form">
                                    <div class="col-md-6">
                                        <div class="aa-myaccount-login">
                                            <h4>Register</h4>

                                            <label for="nom">Nom<span>*</span></label>
                                            <input type="text" name="nom" id="nom" placeholder="ex: SAIDJ">
                                            <label for="prenom">Prenom<span>*</span></label>
                                            <input type="text" name="prenom" id="prenom" placeholder="ex: MAROUA">
                                            <label for="email"> Email address<span>*</span></label>
                                            <input type="email" name="email" id="email" placeholder=" email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="aa-myaccount-register">
                                            <label for="adr">Addresse de livraison</Address><span>*</span></label>
                                            <input type="text" name="adr" id="adr"
                                                placeholder="ex: ALGERIE,ALGER,DOUERA cité cneep 566">
                                            <label for="password">Password<span>*</span></label>
                                            <input type="password" name="password" id="password" placeholder="Password">
                                            <label for="confirm_pass">Confirmed Password<span>*</span></label>
                                            <input type="password" id="confirm_pass" name="confirm_pass"
                                                placeholder="Password">
                                            <fieldset>
                                                <legend>Type de carte bancaire</legend>
                                                <ol>
                                                    <li>
                                                        <input id="visa" name="type_de_carte" value="visa" type="radio">
                                                        <label for=visa>VISA</label>
                                                    </li>
                                                    <li>
                                                        <input id="amex" name="type_de_carte" value="amex" type="radio">
                                                        <label for=amex>AmEx</label>
                                                    </li>
                                                    <li>
                                                        <input id="mastercard" name="type_de_carte" value="mastercard"
                                                            type="radio">
                                                        <label for=mastercard>Mastercard</label>
                                                    </li>
                                                </ol>
                                            </fieldset>
                                            <label for=numero_de_carte>NÂ° de carte</label>
                                            <input id=numero_de_carte name=numero_carte type=number required> <br>
                                            <label for=securite>Code sécurité</label>
                                            <input id=securite name="pwd_carte" type=number required> <br>
                                            <label for=nom_porteur>Nom du porteur</label>
                                            <input id=nom_porteur name=nom_porteur type=text
                                                placeholder="Même nom que sur la carte" required> <br>
                                            <button type="submit" class="aa-browse-btn">Register</button>
                                        </div>
                                    </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Cart view section -->

        <!-- footer -->
        <footer id="aa-footer">
            <!-- footer bottom -->
            <div class="aa-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-footer-top-area">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="aa-footer-widget">
                                            <h3>About Us</h3>
                                            <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Animi perspiciatis aliquam adipisci iure minus, perferendis impedit
                                                reprehenderit ipsa,
                                                cumque dolor, molestias at. Velit consequuntur laudantium voluptatem, neque
                                                cum aperiam eum.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="aa-footer-widget">
                                            <div class="aa-footer-widget">
                                                <h3>Main Menu</h3>
                                                <ul class="aa-footer-nav">
                                                    <li><a style="color:white;" href="#">Home</a></li>
                                                    <li><a style="color:white;" href="#">Our Services</a></li>
                                                    <li><a style="color:white;" href="#">Our Products</a></li>
                                                    <li><a style="color:white;" href="#">About Us</a></li>
                                                    <li><a style="color:white;" href="#">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="aa-footer-widget">
                                            <div class="aa-footer-widget">
                                                <h3>Useful Links</h3>
                                                <ul class="aa-footer-nav">
                                                    <li><a style="color:white;" href="#">Site Map</a></li>
                                                    <li><a style="color:white;" href="#">Search</a></li>
                                                    <li><a style="color:white;" href="#">Advanced Search</a></li>
                                                    <li><a style="color:white;" href="#">Suppliers</a></li>
                                                    <li><a style="color:white;" href="#">FAQ</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="aa-footer-widget">
                                            <div class="aa-footer-widget">
                                                <h3>Contact Us</h3>
                                                <address>
                                                    <p style="color:white;"> ALGERIE,Alger,birkhedem houmet je m'en fou</p>
                                                    <p><span class="fa fa-phone"></span>06-74-70-34-04</p>
                                                    <p><span class="fa fa-envelope"></span>DY@gmail.com</p>
                                                </address>
                                                <div class="aa-footer-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                    <a href="#"><span class="fa fa-youtube"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
            <div class="aa-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-footer-bottom-area">
                                <p>Designed by <a href="https://www.facebook.com/maroua.sd.503">SAIDJ MAROUA </a> et <a
                                        href="https://www.facebook.com/TheDevil611">OUSSAMA FALLAH </a></p>
                                <div class="aa-footer-payment">
                                    <span class="fa fa-cc-mastercard"></span>
                                    <span class="fa fa-cc-visa"></span>
                                    <span class="fa fa-paypal"></span>
                                    <span class="fa fa-cc-discover"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- / footer -->
        <!-- Login Modal -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Login or Register</h4>
                        <form class="aa-login-form" action="">
                            <label for="">Username or Email address<span>*</span></label>
                            <input type="text" placeholder="Username or email">
                            <label for="">Password<span>*</span></label>
                            <input type="password" placeholder="Password">
                            <button class="aa-browse-btn" type="submit">Login</button>
                            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me
                            </label>
                            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                            <div class="aa-register-now">
                                Don't have an account?<a href="register.php">Register now!</a>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>



        <!-- jQuery library -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>
        <!-- SmartMenus jQuery plugin -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.smartmenus.js"><?php echo '</script'; ?>
>
        <!-- SmartMenus jQuery Bootstrap Addon -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"><?php echo '</script'; ?>
>
        <!-- To Slider JS -->
        <?php echo '<script'; ?>
 src="js/sequence.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/sequence-theme.modern-slide-in.js"><?php echo '</script'; ?>
>
        <!-- Product view slider -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.simpleGallery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.simpleLens.js"><?php echo '</script'; ?>
>
        <!-- slick slider -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/slick.js"><?php echo '</script'; ?>
>
        <!-- Price picker slider -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/nouislider.js"><?php echo '</script'; ?>
>
        <!-- Custom js -->
        <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>


    </body>

    </html><?php }
}
