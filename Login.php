<!doctype html>
<html lang="en">
<?php
    session_start();
    $error = "";
    if(isset($_SESSION['error']))
    {
        $error = $_SESSION['error'];
    }
?>
    <head>
    	<title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css\style.css">
        <script src="js\Login_validation.js"></script>
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center login-container">
            <form class="login-form text-center" id = "loginForm" onsubmit="return validate();" action="controllers/checkLogin.php" method="POST">
                <h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
                <div class="form-group">
                    <input type="text" class="form-control rounded-pill form-control-lg" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control rounded-pill form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="forgot-link form-group d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember" name = "remember">Remember Me</label>
                    </div>
                </div>
                <span class="form-check-label" id ="msg" style="color: red" ></span>
                <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase" name="loginBtn" id = "loginBtn" value="Submit">Log in</button>
                <p class="mt-3 font-weight-normal">Don't have an account? <a href="index.html"><strong>Register Now</strong></a></p>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

        <script>  
               var err = '<?php echo $error; ?>';
               $('#msg').text(err);
        </script>
    </body>
</html>
