<!DOCTYPE html>

<html>
    <head>
        <title>Account</title>
        <link rel="stylesheet" href="style.css">
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
                    <h2>REGESITER</h2>
                    <h5>Please fill in the fields below:</h5>
                    <form  action="#">
                        <div class="input-field">
                            <input type="text" required>
                            <label>Fisrst name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" required>
                            <label>Last name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" required>
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" required>
                            <label>Password</label>
                        </div>
                        <button type="submit">Create Account</button>    
                    </form>
                    <div class="button-link">
                        Already hava an account? 
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php include 'Footer.html';?>

        <script src="app.js"></script>
    </body>

</html>