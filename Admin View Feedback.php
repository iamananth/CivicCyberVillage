<?php
include('Admin Page Header.php');

?>
<table class="customers">
            <tr>
                    <th>Feedback ID</th>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Feedback</th>
                    <th>Posted Date</th>
                   
                </tr>
<?php 
					include('dbconnect.php');
					$res=mysql_query("SELECT * FROM studentreg inner join table_feedback on customer_reg.cid = table_feedback.cid");
	  				while($data=mysql_fetch_assoc($res))
					{
						$id = $data['fid'];
						$feed=$data['feedback'];
						$date=$data['date'];
						$cust=$data['cname'];
						$mobile = $data['mobile'];
						echo "
                <tr>
                    <td>$id</td>
                    <td>$cust</td>
                    <td>$mobile</td>
                    <td>$feed</td> 
                    <td>$date</td>
                </tr>";
					}
						?>
						





            </table>
        </center>
<?php
include('AdminPageFooter.php');
?>