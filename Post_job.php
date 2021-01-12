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
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Welcome <?php echo $_SESSION['name'] ?></h3><br />
            <br>

            <nav class="navbar navbar-default">
                <a class="navbar-brand" href="#">Outsourcer Dashboard</a>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="Outsourcer_dashboard.php">Posted Jobs</a></li>
                        <li class='active'><a href="Post_job.php">Post a Job</a></li>
                        <li><a href="View_freelancers.php">View Freelancers</a></li>
                        <li><a href="OPersonal_information.php">Personal Information</a></li>
                        <li><a href="controllers/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            
			<br />
        
        
        
			<form method="post" action="controllers/job_post.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tile</label>
					<input type="text" name="title" id="title" class="form-control" />
				</div>
				<div class="form-group">
					<label>Description</label>
					<input type="text" name="description" id="description" class="form-control" />
                </div>
                <div class="form-group">
					<label>Amount</label>
					<input type="number" name="amount" id="amount" class="form-control" />
                </div>
                <div class="form-group">
					<label>Duration</label>
					<input type="number" name="duration" id="duration" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" name="insert" id="form_action" class="btn btn-info" value="Insert" />
                </div>
			</form>
		</div>
    </body>  
</html>  
