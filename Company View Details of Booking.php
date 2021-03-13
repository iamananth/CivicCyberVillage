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
					<th></th>
                </tr>
<?php 
	session_start();
	$id = $_SESSION['cid'];
					$res=mysql_query("SELECT * FROM companyreg inner join rent_request on companyreg.cid = rent_request.companyid inner join rent_space on rent_request.rentid = rent_space.rentid where rent_space.status = '0' and rent_request.companyid = companyreg.cid ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$rid = $data['rentid'];
						$id = $data['cid'];
						$name=$data['cname'];
						$fon=$data['phone'];
						$email=$data['email'];
						echo "
                <tr>
				<td>$rid</td>
                    <td>$id</td>
                    <td>$name</td>
					<td>$email</td>
                    <td>$fon</td>
                    <td><a href='Company Confirm Booking Request.php?rid=$rid&cid=$id'>Confirm Booking</a></td>
                </tr>";
					}
						?>
						





            </table>        </center>




<?php
include('Common Page Footer.php');
?>