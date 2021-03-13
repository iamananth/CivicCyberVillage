<?php
	include 'dbconnect.php';
	$rid = $_REQUEST['rid'];
	$cid = $_REQUEST['cid'];
	$query = "insert into booking(rentid,companyid) values('$rid','$cid')";
mysql_query($query);
$qry = "update rent_space set status = '1' where rentid = '$rid'";
mysql_query($qry);
		echo "<script type = \"text/javascript\">
					alert(\"Requested Accepted\");
					window.location = (\"Company View Details of Booking.php\")
				</script>";
?>