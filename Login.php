<?php
include('dbconnect.php');
include('Common Page Header.php');
?>

<form  action="#" method="post">
<table>
	<tr>
		<td>Username</td>
		<td><input type="text" class="textbox" name="email" placeholder="Enter Your Email"  required=""></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" class="textbox"  name="password" placeholder="Password" required=""></td>
	</tr>
	<tr>
		<td><button type="submit" class="but" name="submit">Login</button></td>
	</tr>
</table>
	</from>
<?php
	session_start();
	if(isset($_REQUEST['submit']))
	{
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$qry="select * from login where uname='$email' and pass='$password'";
		$res=mysql_query($qry);
		$data=mysql_fetch_assoc($res);
		$_SESSION["email"]=$email;
		$type=$data['utype'];
		if($type=="Company")
		{
        	$_SESSION['username']=$email;
			$qry2="select * from companyreg where email='$email' and password='$password'";
			$res2=mysql_query($qry2);
			$rs2=mysql_fetch_array($res2);
			if($rs2['status'] == '1')
			{
				$_SESSION['cid'] = $rs2['cid'];
				header("Location:Company Home.php");
			}
			else
			{
				echo "<script>alert('Sorry you are not approved by admin')</script>";
			}
		}
		if($type=="Employee")
		{
        	$_SESSION['username']=$email;
			$qry2="select * from employee_reg where email='$email' and password='$password'";
			$res2=mysql_query($qry2);
			$rs2=mysql_fetch_array($res2);
			$_SESSION['eid'] = $rs2['empid'];
			header("Location:Employee Home.php");
		}
		else if($type=='Admin')
		{
			header("Location:Admin Home.php");
		}
		else if($type == 'Student')
		{
			$_SESSION['username']=$email;
			$qry3="select * from studentreg where email='$email' and password='$password'";
			$res3=mysql_query($qry3);
			$rs3=mysql_fetch_array($res3);
			$_SESSION['sid'] = $rs3['sid'];
			$_SESSION['qua'] = $rs3['qualification'];
			header("Location:Student Home.php");
		}
		
		else 
		{
			echo "<script>alert('invalid username or password')</script>";
		}
	}
?>


<?php
include('Common Page Footer.php');
?>