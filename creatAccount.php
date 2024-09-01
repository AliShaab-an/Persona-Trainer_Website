<?php 
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';

?>


<!DOCTYPE html>

<html>
    <head>
        <title>Account</title>
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
                    <h2>REGISTER</h2>
                    <h5>Please fill in the fields below:</h5>
                    <form  action="includes/signup.inc.php" method="POST">
                        <div class="input-field">
                            <?php username_input(); ?>
                            <label>Username</label>
                        </div>
                        
                        <div class="input-field">
                            <?php email_input(); ?>
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <?php password_input(); ?>
                            <label>Password</label>
                        </div>
                        <button type="submit">Create Account</button>    
                    </form>
                    <?php check_signup_errors();   ?>
                    <div class="button-link">
                        Already have an account? 
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php include 'Footer.html';?>

        <script src="JS/app.js"></script>
    </body>

</html>