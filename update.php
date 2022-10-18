<?php
	require_once("dbcon.php");
	$did=$_GET['id'];
	$selectdatafile="select * from mase where id=$did";
	$selcon=mysqli_query($dbcon,$selectdatafile);
	$seldata=mysqli_fetch_assoc($selcon);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="middle">
		<form action="newdata.php?id=<?php echo $seldata['id'];?>" method="post">
			<h2 class="add-bazar">add ajker bazar:</h2>
			<label for="id">bazar no:</label>
			<input value="<?php echo $seldata['id'];?>" type="number" name="id" id="id" placeholder="wrirte bazer no.....">

			<label for="date">bazar date:</label>
			<input value="<?php echo $seldata['date'];?>" type="text" name="date" id="date" placeholder="write bazar date.....">

			<label for="dat">bazar day:</label>
			<input value="<?php echo $seldata['day'];?>" type="text" name="day" id="day" placeholder="write bazar day.....">

			<label for="people">people name:</label>
			<input value="<?php echo $seldata['people'];?>" type="text" name="people" id="people" placeholder="write people name.....">

			<label for="ex-cost">extra cost:</label>
			<input value="<?php echo $seldata['extracost'];?>" type="text" name="ex-cost" id=ex-cost"placeholder="write extra cost .....">

			<label for="total-cost">total cost</label>
			<input value="<?php echo $seldata['totalcost'];?>" type="text" name="total-cost" id="total-cost" placeholder="write total cost.....">

			<input type="submit" value="submit" name="submit">
			<a style='margin-top:8px' class="u-btn btn" href="index.php">go back</a>
		</form>
	</div>
</body>
</html>