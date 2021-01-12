<!doctype html>
<html lang="en">
    <head>
        <?php
        session_start();
        ?>
        <title>Freelancer Registration</title>
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
		<script src="js/Action_fpersonal_information.js"></script>
    </head>
    <body>

        <div class="container">
            <h3 align="center">Welcome <?php echo $_SESSION['name'] ?></h3><br />
            <br>

            <nav class="navbar navbar-default">
                <a class="navbar-brand" href="#">Freelancer Dashboard</a>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="Freelancer_dashboard.php">Applied Jobs</a></li>
                        <li><a href="View_jobs.php">View Jobs</a></li>
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
                    <input type="text" class="form-control form-control-lg" id="skills" name="skills" placeholder="Skills (Ex:Graphics Design, Photo Editng,...)">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="plink" name="plink" placeholder="Portfolio Link (Optional)">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="cpassword" name="cpassword" placeholder="Confirm Password">
                </div>
                <span class="form-check-label" id ="msg" name ="msg" style="color: red" ></span>
                <button type="submit" class="btn mt-5 btn-lg btn-custom btn-block text-uppercase" name="upBtn" id="upBtn" value="Submit">Update</button>
            </form>
        </div>
    </div>
    
    </body>
</html>