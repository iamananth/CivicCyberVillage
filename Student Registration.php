<?php
include('Common Page Header.php');
include('dbconnect.php');
?>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="t1" class="textbox" placeholder="Company"></td>
		</tr>
		<tr>
			<td>House Name</td>
			<td><input type="text" name="t2" class="textbox" placeholder="Address"></td>
		</tr>
		<tr>
			<td>District</td>
			<td><input type="text" name="t3" class="textbox" placeholder="District"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" name="t4" class="textbox" placeholder="Location"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="t5" class="textbox" placeholder="Phone"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="t6" class="textbox" placeholder="Email"></td>
		</tr>
		<tr>
			<td>Highest Qualification</td>
			<td><input type="text" name="t7" class="textbox" placeholder="Highest Qualification"></td>
		</tr>
		<tr>
			<td>Year of Passout</td>
			<td><input type="text" name="t8" class="textbox" placeholder="Year of Passout"></td>
		</tr>
		<tr>
			<td>Work Experience</td>
			<td><input type="text" name="t9" class="textbox" placeholder="Work Experience"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="t10" class="textbox" placeholder="Password"></td>
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
	$f = $_REQUEST['t6'];
	$g = $_REQUEST['t7'];
	$h = $_REQUEST['t8'];
	$i = $_REQUEST['t9'];
	$j = $_REQUEST['t10'];
	$qry = "insert into studentreg(sname,house,district,location,phone,email,qualification,passout,workexp,password) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
	$qry1 = "insert into login(uname,pass,utype) values('$f','$j','Student')";
	mysql_query($qry);
	mysql_query($qry1);
	echo "<script>alert('Registration Completed Successfully')</script>";
}
?>


<?php
include('Common Page Footer.php');
?>