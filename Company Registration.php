<?php
include('Common Page Header.php');
include('dbconnect.php');
?>
<form method="post">
	<table>
		<tr>
			<td>Company Name</td>
			<td><input type="text" name="t1" class="textbox" placeholder="Company"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="t2" class="textbox" placeholder="Address"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="t3" class="textbox" placeholder="Phone"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="t4" class="textbox" placeholder="Email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="t5" class="textbox" placeholder="Password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="b1" value="Register Now" class="but"></td>
		</tr>
	</table>
</form>
<?php
if(isset($_REQUEST['b1']))
{
	$a = $_REQUEST['t1'];
	$b = $_REQUEST['t2'];
	$c = $_REQUEST['t3'];
	$d = $_REQUEST['t4'];
	$e = $_REQUEST['t5'];
	$qry = "insert into companyreg(cname,address,phone,email,password,status) values('$a','$b','$c','$d','$e','0')";
	$qry1 = "insert into login(uname,pass,utype) values('$d','$e','Company')";
	mysql_query($qry);
	mysql_query($qry1);
	echo "<script>alert('Registration Completed Successfully')</script>";
}
?>


<?php
include('Common Page Footer.php');
?>