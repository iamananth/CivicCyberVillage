<?php
include('dbconnect.php');
include('Student Page Header.php');
session_start();
$eid = $_SESSION['sid'];
$qua = $_SESSION['qua'];
?>


<table class="customers">
            <tr>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Job</th>
                    <th>Qualification Required</th>
                    <th>Details</th>
                    <th>Experience</th>
                    <th></th>

                   
                </tr>
<?php 
					$res=mysql_query("SELECT * FROM companyjob inner join companyreg on companyjob.cid =companyreg.cid ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$id = $data['jobid'];
						$na = $data['cname'];
						$date=$data['email'];
						$jna = $data['jobname'];
						$qual=$data['qualification'];
						$de = $data['descr'];
						$exp=$data['experience'];
						echo "
                <tr>
                    <td>$na</td>
                    <td>$date</td>
					<td>$jna</td>
                    <td>$qual</td>
					<td>$de</td>
                    <td>$exp</td>
					<td><a href='Student Apply Job.php?qual=$qual&id=$id'>Apply Now</a></td>
                </tr>";
					}
						?>
						





            </table>        </center>
<?php
include('Common Page Footer.php');
?>