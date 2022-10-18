<?php
	require_once("dbcon.php");
	$clearhistory="TRUNCATE mase";
	$history=mysqli_query($dbcon,$clearhistory);
	if($history){
		echo"history clear";
		header("location:index.php");
	}
	else{
		echo"history clear failed";
	}
?>