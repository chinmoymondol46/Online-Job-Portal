<html>  
    <head>
        <?php
        session_start();
        ?>
        <title>Outsourcer's Dashboard</title>  
		<link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery.min.js"></script>  
		<script src="js/jquery-ui.js"></script>
		<script src="js/Action_view_freelancers.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Welcome <?php echo $_SESSION['name']?></h3><br />
            <br>

            <nav class="navbar navbar-default">
                <a class="navbar-brand" href="#">Outsourcer Dashboard</a>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="Outsourcer_dashboard.php">Posted Jobs</a></li>
                        <li><a href="Post_job.php">Post a Job</a></li>
                        <li class='active'><a href="#">View Freelancers</a></li>
                        <li><a href="OPersonal_information.php">Personal Information</a></li>
                        <li><a href="controllers/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <div class="active-blue-4 mb-4">
				<input class="form-control" type="text" placeholder="Search by Name or Skill" aria-label="Search" id="form_search" name="form_search">
			</div>
			<div class="active-grey-4 mb-4">
				<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Search" />
			</div>
			<br />
			<div class="table-responsive" id="user_data">
				
			</div>
			<br />
		</div>		
    </body>  
</html>  
