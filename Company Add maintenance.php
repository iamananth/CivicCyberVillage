<?php
include('dbconnect.php');
include('Company Page Header.php');
?>

<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Maintenance</td>
			<td><select name="t1" class="textbox" style='color: deeppink;'>
				<option>---Select Maintenance---</option>
				<option value="Plumber">Plumber</option>
				<option value="Electrition">Electrition</option>
				<option value="Tile">Tile</option>
				<option value="Gardener">Gardener</option>
			</select></td>
		</tr>
		<tr>
			<td>Detailed Description</td>
			<td><input type="text" name = "t2" class="textbox" placeholder="Description"></td>
		</tr>
		<tr>
			<td>Maximum Budget</td>
			<td><input type="text" name = "t3" class="textbox" placeholder="Maximum Budget"></td>
		</tr>
		<tr>
			<td>Expected Complete Date</td>
			<td><input type="date" name = "t4" class="textbox" placeholder="Expected Complete Date"></td>
		</tr>
		<tr>
			<td>Design</td>
			<td><input type="file" name="file" class="textbox"></td>
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
	$file = $_FILES['file'];
	$file_name = $file['name'];
	$file_type = $file ['type'];
	$file_size = $file ['size'];
	$file_path = $file ['tmp_name'];

//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

	if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif"))

	if(move_uploaded_file ($file_path,'Design/'.$file_name))//"images" is just a folder name here we will load the file.

	$a = $_REQUEST['t1'];
	$b = $_REQUEST['t2'];
	$c = $_REQUEST['t3'];
	$d = $_REQUEST['t4'];
	$i = $_SESSION['cid'];
	$qry = "insert into maintenance(compid,maintenance,descr,budget,completiondate,design,status) values('$i','$a','$b','$c','$d','$file_name','0')";
	mysql_query($qry);
	echo "<script>alert('Space details added successfully')</script>";
}
?>


<?php
include('Common Page Footer.php');
?>