<?php
include('dbconnect.php');
include('Student Page Header.php');
session_start();
$sid = $_SESSION['sid'];
$qua = $_SESSION['qua'];
$qual = $_GET['qual'];
$id = $_GET['id'];
?>


<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Add Your Resume</td>
			<td><input type="file" class="textbox" name="file"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Apply Now" class="but"></td>
		</tr>
	</table>
</form>

<?php
if(isset($_REQUEST['submit']))
{

	$file = $_FILES['file'];
	$file_name = $file['name'];
	$file_type = $file ['type'];
	$file_size = $file ['size'];
	$file_path = $file ['tmp_name'];
	if($qua == $qual)
	{
		if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif"))

		if(move_uploaded_file ($file_path,'Resume/'.$file_name))//"images" is just a folder name here we will load the file.
	
		$query=mysql_query("insert into jobapply(jobid,sid,resume)values('$id','$sid','$file_name')");//mysql command to insert file name with extension into the table. Use TEXT datatype for a particular column in table.
 
		echo "<script>alert('Resume submitted successfully')</script>";
	}
	else
	{
		echo "<script>alert('You are not eligible for this job')</script>";
	}
	
}

?>


<?php
include('Common Page Footer.php');
?>