<?php
include('dbconnect.php');
include('Company Page Header.php');
?>

<p style="background-color: black; color: white;">
<?php 
	session_start();
	$id = $_SESSION['cid'];
					$res=mysql_query("SELECT * FROM companyreg inner join  rent_space on companyreg.cid = rent_space.compid inner join booking on booking.rentid = rent_space.rentid  where rent_space.status = '1' and booking.companyid = '$id' and rent_space.compid = companyreg.cid");
	  				while($data=mysql_fetch_assoc($res))
					{
						$rid = $data['rentid'];
						$id = $data['cid'];
						$name=$data['cname'];
						$fon=$data['phone'];
						$email=$data['email'];
						$space=$data['space'];
						$rent=$data['amount'];
						echo "Greetings from '$name', We given '$space' sqft space for rent with 1 year <br> agreement for Rs '$rent'
                </p>";
					}
						?>
						





           






<?php
include('Common Page Footer.php');
?>