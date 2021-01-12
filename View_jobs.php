<html>  
    <head> 
		<?php
			session_start();
		?>
        <title>Freelancers's Dashboard</title>  
		<link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery.min.js"></script>  
		<script src="js/jquery-ui.js"></script>
		<script src="js/Action_view_jobs.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Welcome <?php echo $_SESSION['name'] ?></h3><br />
            <br>

            <nav class="navbar navbar-default">
                <a class="navbar-brand" href="#">Freelancer Dashboard</a>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="Freelancer_dashboard.php">Applied Jobs</a></li>
                        <li class='active'><a href="#">View Jobs</a></li>
                        <li><a href="FPersonal_Information.php">Personal Information</a></li>
                        <li><a href="controllers/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <div class="active-blue-4 mb-4">
				<input class="form-control" type="text" placeholder="Search by Title" aria-label="Search" id="form_search" name="form_search">
			</div><br>
			<div class="active-grey-4 mb-4">
				<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Search" />
			</div><br>
			<div class="table-responsive" id="user_data">
				
			</div>
            <br />
            <div id="done_confirmation" title="Confirmation">
			<p>Do you want to submit the job?</p>
		    </div>
		</div>
    </body>  
</html>  
