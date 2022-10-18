<?php
	require_once("dbcon.php");
	$newdata=$_GET["id"];
	if(isset($_POST["submit"])){
		$bid=$_POST["id"];
		$bdate=$_POST["date"];
		$bday=$_POST["day"];
		$bpeople=$_POST["people"];
		$btcost=$_POST["total-cost"];
		$bexcost=$_POST["ex-cost"];
		$newupdatedata="update mase set id='$bid',date='$bdate',day='$bday',people='$bpeople',extracost='$bexcost',totalcost='$btcost' where id=$newdata;";
		$newdata=mysqli_query($dbcon,$newupdatedata);
		if($newdata){
			echo"data update successfully;";
			header("location:index.php");
		}
		else{
			echo"data insert failed";
		}
	}
?>