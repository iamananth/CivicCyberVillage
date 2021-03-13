<?php
include('dbconnect.php');
include('Employee Page Header.php');
session_start();
$eid = $_SESSION['eid'];
?>


<table class="customers">
            <tr>
                   
                    <th>Company</th>
                    <th>Phone</th>
                    <th>Description</th>
					<th>Expected Completion Date</th>
                    <th>Maximum Budget</th>
                    <th>Image</th>
                </tr>
<?php 
					$res=mysql_query("SELECT * FROM companyreg inner join maintenance on companyreg.cid = maintenance.compid inner join work_allotment on work_allotment.mid = maintenance.mid where maintenance.status = 'Alloted' and work_allotment.eid = '$eid' ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$id = $data['mid'];
						$na = $data['cname'];
						$feed=$data['phone'];
						$d=$data['descr'];
						
						$c = $data['completiondate'];
						$mb=$data['budget'];
						$im = $data['design'];
						echo "
                <tr>
                    <td>$na</td>
                    <td>$feed</td>
                    <td>$d</td>
                    <td>$c</td>
                    <td>$mb</td>
					<td><img src='Design/".$data['design']."' height = '100px' width = '100px'></td>;
                    <td><a href='Employee Update Work Status.php?id=$id'>Completed</a></td>
                </tr>";
					}
						?>
						





            </table>        </center>
<?php
include('Common Page Footer.php');
?>