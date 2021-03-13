<?php
include('dbconnect.php');
include('Company Page Header.php');
?>


<table class="customers">
            <tr>
                   <th>Rental ID</th>
                   <th>Company ID</th>
                   <th>Company Name</th>
                   <th>Email</th>
                   <th>Phone</th>
                   <th>Space(In Sqft)</th>
                   <th>Rent</th>
					<th></th>
                </tr>
<?php 
	session_start();
	$id = $_SESSION['cid'];
					$res=mysql_query("SELECT * FROM companyreg inner join booking on companyreg.cid = booking.companyid inner join rent_space on booking.rentid = rent_space.rentid  where rent_space.status = '1' and rent_space.compid = '$id' ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$rid = $data['rentid'];
						$id = $data['cid'];
						$name=$data['cname'];
						$fon=$data['phone'];
						$email=$data['email'];
						$space=$data['space'];
						$rent=$data['amount'];
						echo "
                <tr>
				<td>$rid</td>
                    <td>$id</td>
                    <td>$name</td>
					<td>$email</td>
                    <td>$fon</td>
					<td>$space</td>
                    <td>$rent</td>
                </tr>";
					}
						?>
						





            </table>        </center>




<?php
include('Common Page Footer.php');
?>