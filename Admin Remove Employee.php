<?php
	include 'dbconnect.php';
	$id = $_REQUEST['id'];
	$query = "delete from employee_reg where empid = '$id'";
mysql_query($query);
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Rejected\");
					window.location = (\"Admin View Employee.php\")
				</script>";
?>