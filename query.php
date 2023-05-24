<?php

	$un="webuser";
	$pw="]b.kWaCZQ3kG9!_9";
	$host="localhost";
	$db="contact_data";			
	$dblink=new mysqli($host,$un,$pw,$db);
	$sql="Select * from `entries`";
	$results=$dblink->query($sql) or
		die("<p>Something went wrong with: $sql<br>".$dblink->error);
	$counter = 0;
	while($data=$results->fetch_array(MYSQLI_ASSOC))
	{

		$counter++;
		if ($counter % 2 == 1) {
			echo '<tr>';
		} else {
			echo '<tr style="background-color: #f2f2f2;">';
		}
		echo '<td> <i class="bi bi-chevron-right" style="color: #149ddd;"></i></td>';
		echo '<td>'.$data['auto_id'].'</td>';
		echo '<td>'.$data['first_name'].'</td>';
		echo '<td>'.$data['last_name'].'</td>';
		echo '<td>'.$data['email'].'</td>';
		echo '<td>'.$data['phone'].'</td>';
		echo '<td>'.$data['comments'].'</td>';
		echo '</tr>';
	}
?>