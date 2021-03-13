<?php
include('dbconnect.php');
include('Admin Page Header.php');
$id = $_GET['id'];
?>
<form method="post">
	<table>
		<tr>
			<td>Maintenance Category</td>
			<td><select name="t1" class="textbox" style='color: deeppink;'>
				<option>---Select Maintenance---</option>
				<option value="Plumber">Plumber</option>
				<option value="Electrition">Electrition</option>
				<option value="Tile">Tile</option>
				<option value="Gardener">Gardener</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="submit" name="b1" value="Search Now" class="but"></td>
		</tr>
		<tr>
			<td>Select Employee</td>
			<td><?php
				if(isset($_REQUEST['b1']))
				{
					$a = $_REQUEST['t1'];
					$sql=mysql_query("select * from `employee_reg` where jobname = '$a'");
		    		echo "<select id='sel' name='sel' class='textbox'  style='color: deeppink;'>";
		    		echo "<option>.....Select Employee......</option>";
		    		if(mysql_num_rows($sql))
					{		
						while($rs=mysql_fetch_array($sql))
						{
							echo'<option value="'.$rs['empid'].'">'.$rs['ename'].'</option>';
						}
					}
					echo "</select>";
				?></td>
				<?php
				}
            	?>							
		</tr>
		<tr>
			<td><input type="submit" name="b2" value="Allot Now" class="but"></td>
		</tr>
	</table>
</form>
<?php
if(isset($_REQUEST['b2']))
{
	$wid = $_REQUEST['sel'];
	$qry = "insert into work_allotment(mid,eid) values('$id','$wid')";
	mysql_query($qry);
	$qr = "update maintenance set status = 'Alloted' where mid = '$id'";
	mysql_query($qr);
	echo "<script>alert('Maintenance work Alloted Successfully')</script>";	
}
?>
