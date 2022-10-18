<?php 
	require_once("dbcon.php");
	$did= $_GET['id'];
	$delete="delete from mase where id=$did";
	$delbazar=mysqli_query($dbcon,$delete);
	if($delbazar){
		echo"the bazar list delete successfully !";
		header("location:index.php");
	}
	else{
		echo"bazar list delete failed.please try again";
	}
	
 ?>