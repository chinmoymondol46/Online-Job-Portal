<!doctype html>
<html lang="en">
    <head>
        <title>Outsourcer Registration</title>
        <script src="js\Oregistration_validation.js"></script> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css\style.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center login-container form-row">
            <form class="login-form text-center" onsubmit="return validate();" action="controllers/o_reg.php" method="POST" enctype="multipart/form-data">
                <h2 class="mb-5 font-weight-light">Outsourcer's Registration</h2>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                          <input type="text" class="form-control rounded-pill form-control-lg" id="fname" name="fname" placeholder="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control rounded-pill form-control-lg" id="lname" name="lname" placeholder="Last name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row align-items-center">
                        <div class="col">
                            <p class="font-weight-light ">Gender</p>
                        </div>
                        <div class="col">
                            <input type="radio" name="gender" id="male" autocomplete="off" value = "male"><p class="font-weight-light">Male</p>
                        </div>
                        <div class="col">
                            <input type="radio" name="gender" id="female" autocomplete="off" value = "female"><p class="font-weight-light">Female</p>
                        </div>
                        <div class="col">
                            <input type="radio" name="gender" id="others" autocomplete="off" value = "others"><p class="font-weight-light">Others</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control rounded-pill form-control-lg" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control rounded-pill form-control-lg" id="website" name="website" placeholder="Website (Optional)">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control rounded-pill form-control-lg" id="nid" name="nid" placeholder="NID">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control rounded-pill form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control rounded-pill form-control-lg" id="cpassword" name="cpassword" placeholder="Confirm Password">
                </div>
                <span class="form-check-label" id ="msg" style="color: red" ></span>
                <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase" name="regBtn" value="Submit">Register</button>
                <p class="mt-3 font-weight-normal">Have an account? <a href="Login.php"><strong>Login Now</strong></a></p>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>