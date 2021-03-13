<?php
	include 'dbconnect.php';
	$id = $_REQUEST['id'];
	$rid = $_REQUEST['rid'];
	$query = "insert into rent_request(rentid,companyid) values('$rid','$id')";
mysql_query($query);
		echo "<script type = \"text/javascript\">
					alert(\"Your request has been successfully sent. Please wait for the confirmation\");
					window.location = (\"Company Search Rent Space.php\")
				</script>";
?>