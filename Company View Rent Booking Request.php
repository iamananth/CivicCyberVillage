<?php
include('dbconnect.php');
include('Company Page Header.php');
?>


<table class="customers">
            <tr>
                   <th>Rental ID</th>
                    <th>Space(Sqft)</th>
                    <th>Rent</th>
					<th></th>
                </tr>
<?php 
	session_start();
	$id = $_SESSION['cid'];
					$res=mysql_query("SELECT * FROM companyreg inner join rent_space on companyreg.cid = rent_space.compid   where rent_space.status = '0' and cid='$id' ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$rid = $data['rentid'];
						$id = $data['cid'];
						$space=$data['space'];
						$amount=$data['amount'];
						echo "
                <tr>
				<td>$rid</td>
                    <td>$space</td>
                    <td>$amount</td>
					<td><a href='Company View Details of Booking.php?rid=$rid'>View Booking Details</a></td>
                </tr>";
					}
						?>
						





            </table>        </center>




<?php
include('Common Page Footer.php');
?>