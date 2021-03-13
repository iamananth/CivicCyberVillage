<?php
include('dbconnect.php');
include('Admin Page Header.php');
?>


<table class="customers">
            <tr>
                   
                    <th>Company</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Maintenance</th>
                    <th>Description</th>
					<th>Expected Completion Date</th>
                   
                </tr>
<?php 
					$res=mysql_query("SELECT * FROM companyreg inner join maintenance on companyreg.cid = maintenance.compid where maintenance.status = '0' ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$id = $data['mid'];
						$na = $data['cname'];
						$feed=$data['phone'];
						$date=$data['email'];
						$main=$data['maintenance'];
						$d=$data['descr'];
						$c = $data['completiondate'];
						echo "
                <tr>
                    <td>$na</td>
                    <td>$feed</td>
                    <td>$date</td>
					<td>$main</td>
                    <td>$d</td>
                    <td>$c</td>
                    <td><a href='Admin Approve Company Maintenance.php?id=$id'>Forward</a></td>
					<td><a href='Admin Reject Maintenance Company.php?id=$id'>Reject</a></td>
                </tr>";
					}
						?>
						





            </table>        </center>
<?php
include('Common Page Footer.php');
?>