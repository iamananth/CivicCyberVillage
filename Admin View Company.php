<?php
include('dbconnect.php');
include('Admin Page Header.php');
?>


<table class="customers">
            <tr>
                    <th>Company</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>

                   
                </tr>
<?php 
					$res=mysql_query("SELECT * FROM companyreg where status = '0' ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$id = $data['cid'];
						$na = $data['cname'];
						$feed=$data['phone'];
						$date=$data['email'];
						echo "
                <tr>
                    <td>$na</td>
                    <td>$feed</td>
                    <td>$date</td>
                    <td><a href='Admin Approve Company.php?id=$id'>Accept</a></td>
					<td><a href='Admin Reject Company.php?id=$id'>Reject</a></td>
                </tr>";
					}
						?>
						





            </table>        </center>
<?php
include('Common Page Footer.php');
?>