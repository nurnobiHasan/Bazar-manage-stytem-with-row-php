<?php
	require_once("dbcon.php");
	$selectallcost="select sum(totalcost) from mase";
	$totalcost=mysqli_query($dbcon,$selectallcost);
	if($totalcost->num_rows>0){
		
	}
	$avragecost="select avg(totalcost) from mase";
	$avgconn=mysqli_query($dbcon,$avragecost);
	if($avgconn->num_rows>0){
		
	}
	$maxcost="select max(totalcost) from mase";
	$maxconn=mysqli_query($dbcon,$maxcost);
	if($maxconn->num_rows>0){
		
	}
	$mincost="select min(totalcost) from mase";
	$mincostcon=mysqli_query($dbcon,$mincost);
	if($mincostcon->num_rows>0){
		
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>cost detelse</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="total-cost-area">
		<h2>apner bazar ar cost detelse:</h2>
		<h3>
			<?php
				while($totalcoststore=mysqli_fetch_assoc($totalcost)){
				echo "apner monthly total cost=".$totalcoststore['sum(totalcost)'];
				}		
			?>
		</h3>
		<h3>
			<?php
				while($maxcosst=mysqli_fetch_assoc($maxconn)){
					echo "apner maximum cost is=".$maxcosst['max(totalcost)'];
				}
			?>
		</h3>
		<h3>
			<?php
				while($mincost=mysqli_fetch_assoc($mincostcon)){
					echo "apner minimam cost=".$mincost['min(totalcost)'];
				}
			?>
		</h3>
		<h3>
			<?php
				while($avgcost=mysqli_fetch_assoc($avgconn)){
					echo "apner perday avarage cost=".$avgcost['avg(totalcost)']."taka";

				}
			?>
		</h3>
		<a style='margin-top:12px;margin-bottom:20px;margin-left:3px' class="u-btn btn" href="index.php">go back</a>
	</div>
</body>
</html>