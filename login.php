<?php 
require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="Css/style.css">
        <script src="https://kit.fontawesome.com/7f6ab6587f.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <!--Header-->
        <?php include 'Header.html'; ?>
        
        <div class="form-popup">
            <div class="form-box">
                <div class="form-details">
                </div>
                <div class="form-content">
                    <h2>LOGIN</h2>
                    <h5>Please enter your e-mail and password:</h5>
                    <form  action="includes/login.inc.php" method="post">
                        <div class="input-field">
                            <input type="text" >
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" >
                            <label>Password</label>
                        </div>
                        <a href="#" class="forget-pass">Forgot password</a>
                        <button type="submit">LOGIN</button>    
                    </form>
                    <div class="button-link">
                        New Customer? 
                        <a href="creatAccount.php">Create an account</a>
                    </div>
                    <form  action="includes/logout.inc.php" method="post">
                        <button>Logout</button>
                    </form>
                </div>
            </div>
        </div>
        <?php check_login_errors();  ?>


        <!--footer-->
        <?php include 'Footer.html'; ?>
        <script src="JS/app.js"></script>
    </body>
</html>
