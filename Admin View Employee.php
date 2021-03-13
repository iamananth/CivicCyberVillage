<?php
include('dbconnect.php');
include('Admin Page Header.php');
?>


<table class="customers">
            <tr>
                   <th>Employee ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Job</th>
                    <th>Adhar Number</th>

                   
                </tr>
<?php 
					$res=mysql_query("SELECT * FROM employee_reg  ");
	  				while($data=mysql_fetch_assoc($res))
					{
						$id = $data['empid'];
						$na = $data['ename'];
						$fon=$data['phone'];
						$email=$data['email'];
						$job=$data['jobname'];
						$an=$data['adhar'];
						echo "
                <tr>
                    <td>$id</td>
                    <td>$na</td>
                    <td>$fon</td>
					<td>$email</td>
                    <td>$job</td>
                    <td>$an</td>
					<td><a href='Admin Remove Employee.php?id=$id'>Remove</a></td>
                </tr>";
					}
						?>
						





            </table>        </center>
<?php

include('Common Page Footer.php');
?>