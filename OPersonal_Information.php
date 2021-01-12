<!doctype html>
<html lang="en">
    <head>
        <?php
        session_start();
        ?>
        <title>Outsourcer's Dashboard</title>
        <script src="js\Fregistration_validation.js"></script> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css\style.css"> -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery.min.js"></script>  
		<script src="js/jquery-ui.js"></script>
		<script src="js/Action_opersonal_information.js"></script>
    </head>
    <body>

        <div class="container">
            <h3 align="center">Welcome <?php echo $_SESSION['name'] ?></h3><br />
            <br>

            <nav class="navbar navbar-default">
                <a class="navbar-brand" href="#">Outsourcer Dashboard</a>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="Outsourcer_dashboard.php">Posted Jobs</a></li>
                        <li><a href="Post_job.php">Post a Job</a></li>
                        <li><a href="View_Freelancers.php">View Freelancers</a></li>
                        <li class='active'><a href="#">Personal Information</a></li>
                        <li><a href="controllers/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        <div class="d-flex justify-content-center align-items-center login-container form-row" id="form_">
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="website" name="website" placeholder="Website (Optional)">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="cpassword" name="cpassword" placeholder="Confirm Password">
                </div>
                <span class="form-check-label" id ="msg" style="color: red" ></span>
                <button class="btn mt-5 btn-lg btn-custom btn-block text-uppercase" name="upBtn" id="upBtn" value="Submit">Update</button>
        </div>
    </div>
    
    </body>
</html>