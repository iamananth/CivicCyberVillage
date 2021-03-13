<?php
include('dbconnect.php');
include('Company Page Header.php');
?>

<form method="post">
	<table>
		<tr>
			<td>Space (Sq ft)</td>
			<td><input type="text" name = "t1" class="textbox" placeholder="Space in Square Feat"></td>
		</tr>
		<tr>
			<td>Rent Amount</td>
			<td><input type="text" name = "t2" class="textbox" placeholder="Amount"></td>
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
	$qry = "insert into rent_space(compid,space,amount,status) values('$i','$a','$b','0')";
	mysql_query($qry);
	echo "<script>alert('Space details added successfully')</script>";
}
?>


<?php
include('Common Page Footer.php');
?>