<!DOCTYPE html>
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
                        {if isset($error)}
                            <div class="alert alert-danger">
                                {$error} 
                            </div>
                        {/if}
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
    
</body>
</html>