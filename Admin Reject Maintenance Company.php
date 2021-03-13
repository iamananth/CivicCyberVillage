<?php
	include 'dbconnect.php';
	$id = $_REQUEST['id'];
	$query = "update maintenance  set status = 'Rejected' where mid = '$id'";
	mysql_query($query);
		echo "<script type = \"text/javascript\">
					alert(\"Rejected Company Maintenance\");
					window.location = (\"Admin View Company Maintenance.php\")
				</script>";
?>