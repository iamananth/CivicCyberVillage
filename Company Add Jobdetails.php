<?php
include('dbconnect.php');
include('Company Page Header.php');
?>

<form method="post">
	<table>
		<tr>
			<td>Jobname</td>
			<td><input type="text" name = "t1" class="textbox" placeholder="Specify Jobname"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name = "t2" class="textbox" placeholder="Description"></td>
		</tr>
		<tr>
			<td>Qualification</td>
			<td><input type="text" name = "t3" class="textbox" placeholder="Highest Qualification Required"></td>
		</tr>
		<tr>
			<td>Experience</td>
			<td><input type="text" name = "t4" class="textbox" placeholder="Experience Required"></td>
		</tr>
		<tr>
			<td><input type="submit" name="b1" class="but" value="Add Now"></td>
		</tr>
	</table>
</form>

<?php
session_start();
if(isset($_REQUEST['b1']))
{
	$a = $_REQUEST['t1'];
	$b = $_REQUEST['t2'];
	$i = $_SESSION['cid'];
	$c = $_REQUEST['t3'];
	$d = $_REQUEST['t4'];
	$qry = "insert into companyjob(jobname,descr,qualification,experience,cid) values('$a','$b','$c','$d','$i')";
	mysql_query($qry);
	echo "<script>alert('Job details added successfully')</script>";
}
?>


<?php
include('Common Page Footer.php');
?>