<?php
	include 'dbconnect.php';
	$id = $_REQUEST['id'];
	$query = "update companyreg set status = '0' where cid = '$id'";
mysql_query($query);
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Rejected\");
					window.location = (\"Admin View Company.php\")
				</script>";
?>