<?php
/* Smarty version 3.1.39, created on 2021-05-18 17:11:36
  from 'C:\Users\Pedagogie\Desktop\TC web\Views\layout\account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a3d928c0f328_52248619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdd4d517db45c7d459abd630f27eb7c0387b1aa7' => 
    array (
      0 => 'C:\\Users\\Pedagogie\\Desktop\\TC web\\Views\\layout\\account.tpl',
      1 => 1621350691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:loginmodel.tpl' => 1,
  ),
),false)) {
function content_60a3d928c0f328_52248619 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>DY | Product Detail</title>
    
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
    <link href="css/style.css" rel="stylesheet">    

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
  
        <style>
            .myaccount-tab-menu {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}

.myaccount-tab-menu a {
  border: 1px solid #ccc;
  border-bottom: none;
  font-weight: 600;
  font-size: 13px;
  display: block;
  padding: 10px 15px;
  text-transform: uppercase;
}

.myaccount-tab-menu a:last-child {
  border-bottom: 1px solid #ccc;
}

.myaccount-tab-menu a:hover, .myaccount-tab-menu a.active {
  background-color: #ff6e21;
  border-color: #ff6e21;
  color: #ffffff;
}

.myaccount-tab-menu a i.fa {
  font-size: 14px;
  text-align: center;
  width: 25px;
}

@media only screen and (max-width: 767px) {
  #myaccountContent {
    margin-top: 30px;
  }
}

.myaccount-content {
  border: 1px solid #eeeeee;
  padding: 30px;
}

@media only screen and (max-width: 767px) {
  .myaccount-content {
    padding: 20px 15px;
  }
}

.myaccount-content form {
  margin-top: -20px;
}

.myaccount-content h3 {
  font-size: 20px;
  border-bottom: 1px dashed #ccc;
  padding-bottom: 10px;
  margin-bottom: 25px;
  font-weight: 600;
}

.myaccount-content .welcome a:hover {
  color: #ff6e21;
}

.myaccount-content .welcome strong {
  font-weight: 600;
  color: #ff6e21;
}

.myaccount-content fieldset {
  margin-top: 20px;
}

.myaccount-content fieldset legend {
  font-size: 16px;
  margin-bottom: 20px;
  font-weight: 600;
  padding-bottom: 10px;
  border-bottom: 1px solid #ccc;
}

.myaccount-content .account-details-form {
  margin-top: 50px;
}

.myaccount-content .account-details-form .single-input-item {
  margin-bottom: 20px;
}

.myaccount-content .account-details-form .single-input-item label {
  font-size: 14px;
  text-transform: capitalize;
  display: block;
  margin: 0 0 5px;
}

.myaccount-content .account-details-form .single-input-item input {
  border: 1px solid #e8e8e8;
  height: 50px;
  background-color: transparent;
  padding: 2px 20px;
  color: #1f2226;
  font-size: 13px;
}

.myaccount-content .account-details-form .single-input-item input:focus {
  border: 1px solid #343538;
}

.myaccount-content .account-details-form .single-input-item button {
  border: none;
  background-color: #ff6e21;
  text-transform: uppercase;
  font-weight: 600;
  padding: 9px 25px;
  color: #fff;
  font-size: 13px;
}

.myaccount-content .account-details-form .single-input-item button:hover {
  background-color: #1f2226;
}

.myaccount-table {
  white-space: nowrap;
  font-size: 14px;
}

.myaccount-table table th,
.myaccount-table .table th {
  padding: 10px;
  font-weight: 600;
  background-color: #f8f8f8;
  border-color: #ccc;
  border-bottom: 0;
  color: #1f2226;
}

.myaccount-table table td,
.myaccount-table .table td {
  padding: 10px;
  vertical-align: middle;
  border-color: #ccc;
}

.saved-message {
  background-color: #fff;
  border-top: 3px solid #ff6e21;
  font-size: 14px;
  padding: 20px 0;
  color: #333;
}

        </style>
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
  
 











  <!-- product category -->
  <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                            Dashboard</a>
                                        <a href="#orders" data-toggle="tab" class=""><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                        <a href="#address-edit" data-toggle="tab" class="active"><i class="fa fa-map-marker"></i> address</a>
                                        <a href="#account-info" data-toggle="tab" class=""><i class="fa fa-user"></i> Account Details</a>
                                        <a href="/logout"><i class="fa fa-sign-out"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->
                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>
                                                <div class="welcome">
                                                    <p>Hello, <strong>Alex Tuntuni</strong> </p>
                                                </div>

                                                <p class="mb-0">From your account dashboard. you can easily check &amp; view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>poduct</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td>produit 01</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Payment Method</h3>
                                                <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade active show" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Billing Address</h3>
                                                <address>
                                                    <p><strong>Alex Tuntuni</strong></p>
                                                    <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                                        <p>Mobile: (123) 456-7890</p>
                                                </address>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade active show" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Account Details</h3>
                                                <div class="account-details-form">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="first-name" class="required">NOM</label>
                                                                    <input type="text" id="first-name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">PRENOM</label>
                                                                    <input type="text" id="last-name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required">Numero de la carte bancaire</label>
                                                            <input type="text" id="display-name">
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email Addres</label>
                                                            <input type="email" id="email">
                                                        </div>
                                                         <div class="single-input-item">
                                                            <label for="email" class="required"> Addresse de livraison </label>
                                                            <input type="email" id="email">
                                                        </div>
                                                        <div class="single-input-item">
                                                                <label for="current-pwd" class="required">Current Password</label>
                                                                <input type="password" id="current-pwd">
                                                            </div>
                                                             <div class="single-input-item">
                                                            <button class="check-btn sqr-btn ">Save Changes</button>
                                                        </div>
                                                        </form>
                                                         <form action="#">
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="single-input-item">
                                                                <label for="current-pwd" class="required">Current Password</label>
                                                                <input type="password" id="current-pwd">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="new-pwd" class="required">New Password</label>
                                                                        <input type="password" id="new-pwd">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                        <input type="password" id="confirm-pwd">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item">
                                                            <button class="check-btn sqr-btn ">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
  <!-- / product category -->











  <!-- footer -->  
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- / footer -->
  <?php $_smarty_tpl->_subTemplateRender('file:loginmodel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    
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
