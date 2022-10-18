<?php
	include("dbcon.php");
	$vid=$_GET["id"];
	$datavews="select * from mase where id=$vid";
	$dataconnection=mysqli_query($dbcon,$datavews);
	$adddata=mysqli_fetch_assoc($dataconnection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>data view</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="vtable">
		<h2 class="vtext">our date details bazar list</h2>
		<table class="viewtable">
			<tr>
				<th>bazar id:</th>
				<td><?php echo $adddata["id"];?></td>
			</tr>
			<tr>
				<th>bazar name:</th>
				<td><?php echo $adddata["date"];?></td>
			</tr>
			<tr>
				<th>bazar day:</th>
				<td><?php echo $adddata["day"];?></td>
			</tr>
			<tr>
				<th>bazar popple:</th>
				<td><?php echo $adddata["people"];?></td>
			</tr>
			<tr>
				<th>bazar extra cost:</th>
				<td><?php echo $adddata["extracost"];?></td>
			</tr>
			<tr>
				<th>bazar total cost:</th>
				<td><?php echo $adddata["totalcost"];?></td>
			</tr>
			<a style='margin-top:12px;margin-bottom:20px;margin-left:26px' class="u-btn btn" href="index.php">go back</a>
		</table>
	</div>
</body>
</html>