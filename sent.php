<?php
	require_once("dbcon.php");
	if(isset($_POST["submit"])){
		$bid=$_POST["id"];
		$bdate=$_POST["date"];
		$bday=$_POST["day"];
		$bpeople=$_POST["people"];
		$btcost=$_POST["total-cost"];
		$bexcost=$_POST["ex-cost"];

		$binsert="insert into mase(id,date,day,people,extracost,totalcost) values('$bid','$bdate','$bday','$bpeople','$bexcost','$btcost');";
		$dinsert=mysqli_query($dbcon,$binsert);
		if($dinsert){
			echo"bazar list update successfully!";
			header("location:index.php");
		}
		else{
			echo"bazar list update failed";
		}
	}

?>