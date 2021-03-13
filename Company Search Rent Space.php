<?php
include('dbconnect.php');
include('Company Page Header.php');
?>


<table class="customers">
            <tr>
                   <th>Rental ID</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Space(Sqft)</th>
                    <th>Rent</th>

                </tr>
<?php 
	session_start();
	$id = $_SESSION['cid'];
	echo $id;
					$res=mysql_query("SELECT * FROM companyreg inner join rent_space on companyreg.cid = rent_space.compid where rent_space.status = '0' and cid!='$id' ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$rid = $data['rentid'];
						$na = $data['cname'];
						$ad = $data['address'];
						$fon=$data['phone'];
						$email=$data['email'];
						$space=$data['space'];
						$amount=$data['amount'];
						echo "
                <tr>
				<td>$rid</td>
                    <td>$na</td>
                    <td>$ad</td>
                    <td>$fon</td>
					<td>$email</td>
                    <td>$space</td>
                    <td>$amount</td>
                    <td><a href='Company Request RentSpace.php?id=$id&rid=$rid'>Request for Rent</a></td>
                </tr>";
					}
						?>
						





            </table>        </center>




<?php
include('Common Page Footer.php');
?>