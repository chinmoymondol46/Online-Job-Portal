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
		<script src="js/Action_posted_jobs.js"></script>
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
                        <li class='active'><a href="#">Posted Jobs</a></li>
                        <li><a href="Post_job.php">Post a Job</a></li>
                        <li><a href="View_freelancers.php">View Freelancers</a></li>
                        <li><a href="OPersonal_information.php">Personal Information</a></li>
                        <li><a href="controllers/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            
			<div class="table-responsive" id="user_data">
				
			</div>
			<br />
		</div>
        
        
        
		<div id="user_dialog" title="Edit Data">
			<form method="post" id="user_form">
				<div class="form-group">
					<label>Tile</label>
					<input type="text" name="title" id="title" class="form-control" />
					<span id="error_title" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Description</label>
					<input type="text" name="description" id="description" class="form-control" />
					<span id="error_description" class="text-danger"></span>
                </div>
                <div class="form-group">
					<label>Amount</label>
					<input type="number" name="amount" id="amount" class="form-control" />
					<span id="error_amount" class="text-danger"></span>
                </div>
                <div class="form-group">
					<label>Duration</label>
					<input type="number" name="duration" id="duration" class="form-control" />
					<span id="error_duration" class="text-danger"></span>
                </div>
                <div class="form-group">
					<label>Status</label>
					<input type="text" name="status" id="status" class="form-control" />
					<span id="error_status" class="text-danger"></span>
                </div>
				<div class="form-group">
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="hidden" name="hidden_id" id="hidden_id" />
					<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
				</div>
			</form>
		</div>
		
		<div id="action_alert" title="Action">
			
		</div>
		
		<div id="delete_confirmation" title="Confirmation">
			<p>Are you sure you want to Delete this job?</p>
		</div>
		
    </body>  
</html>  
