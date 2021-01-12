<?php

//fetch.php

require_once("../db/db_connect.php");
$connect = db_conn();
$query = '';
if(isset($_POST['search']) && $_POST['search'] != ''){
	$query = 'SELECT * FROM freelancers where name LIKE "%'.$_POST['search'].'%" OR skills LIKE "%'.$_POST['search'].'%";';
} else {
	$query = "SELECT * FROM freelancers;";
}

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Joining Date</th>
		<th>Skills</th>
		<th>Work Done</th>
		<th>Portfolio</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["u_id"].'</td>
			<td>'.$row["name"].'</td>
			<td>'.$row["gender"].'</td>
            <td>'.$row["email"].'</td>
			<td>'.$row["joining_date"].'</td>
			<td>'.$row["skills"].'</td>
			<td>'.$row["work_done"].'</td>
			<td>'.$row["portfolio_link"].'</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}

$output .= '</table>';
echo $output;
?>