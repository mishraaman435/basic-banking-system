<?php

	$con = mysqli_connect("localhost","id17439553_amanmishra435","<r8&d*a8TuRqyvu2");

	if(!$con){
		die('Could Not Connect to the database' .mysqli_error());
	}
mysqli_select_db($con, "id17439553_mybank");
echo 'Connected successfully';

?>