<?php
include('CustomerPageHeader.php');
?>
<form method="post">
<table>
	<tr>
		<td>Post your Comment</td>
		<td><input type="text" name="t1" class="textbox" placeholder="Your Comments"/></td>
	</tr>
	<tr>
		<td><input type="submit" name="b1" class="but" /></td>
	</tr>
</table>
</form>
<?php
session_start();
include('dbconnect.php');
if(isset($_REQUEST['b1']))
{
	$da = date("d-m-Y");
	$t1 = $_REQUEST['t1'];
	$ui = $_SESSION['uid'];
	$qry = "insert into table_feedback(cid,feedback,date)values('$ui','$t1','$da')";
	mysql_query($qry);
	echo "<script>alert('Thank You for the feedback')</script>";
}
?>
<?php
include('CustomerPageFooter.php');										
?>
