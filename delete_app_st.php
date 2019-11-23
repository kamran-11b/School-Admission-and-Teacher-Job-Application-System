<?php
if (isset($_GET['admission_id'])) {
	include("database/connectdb.php");
	
	$delete_id = $_GET['admission_id'];
	
	$deleteQuery = "DELETE FROM admission_student where admission_id=$delete_id";
	
	if ($connect->query($deleteQuery)) {
		header("Location:app_student.php");
		
	} else {
		die($connect->error);
	}
}
?>
