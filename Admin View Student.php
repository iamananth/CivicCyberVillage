<?php
include('dbconnect.php');
include('Admin Page Header.php');
?>


<table class="customers">
            <tr>
                   <th>Student ID</th>
                    <th>Student</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Qualification</th>
                    <th>Job Experience</th>

                   
                </tr>
<?php 
					$res=mysql_query("SELECT * FROM studentreg  ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$id = $data['sid'];
						$na = $data['sname'];
						$fon=$data['phone'];
						$email=$data['email'];
						$qua=$data['qualification'];
						$we=$data['workexp'];
						echo "
                <tr>
                    <td>$id</td>
                    <td>$na</td>
                    <td>$fon</td>
					<td>$email</td>
                    <td>$qua</td>
                    <td>$we</td>
                </tr>";
					}
						?>
						





            </table>        </center>
<?php

include('Common Page Footer.php');
?>