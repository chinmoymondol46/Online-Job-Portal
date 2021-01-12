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
		<script src="js/Action_applied_jobs.js"></script>
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
                        <li class='active'><a href="#">Applied Jobs</a></li>
                        <li><a href="View_jobs.php">View Jobs</a></li>
                        <li><a href="FPersonal_Information.php">Personal Information</a></li>
                        <li><a href="controllers/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            
			<div class="table-responsive" id="user_data">
				
			</div>
            <br />
        </div>
        <div id="done_confirmation" title="Confirmation">
			<p>Are you sure you want to Complete this job?</p>
		</div>
    </body>  
</html>  
