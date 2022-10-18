<?php
	require_once("dbcon.php");
	$datavew="select * from mase";
	$datacon=mysqli_query($dbcon,$datavew);
	if($datacon->num_rows>0){
		
	}

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
	<div class="container">
		<h2>our mase bazar list</h2>
		<a class="add-bazar-list"href="add.php">add new bazarlist</a>
		<table>
			<tr>
				<th>ID</th>
				<th>Date</th>
				<th>Day</th>
				<th>People</th>
				<th>Manage list</th>
			</tr>
		<?php
			while($row=mysqli_fetch_assoc($datacon)){?>
			<tr>
				<td><?php echo $row["id"];?></td>
				<td><?php echo $row["date"];?></td>
				<td><?php echo $row["day"];?></td>
				<td><?php echo $row["people"];?></td>	
				<td>
					<a class="v-btn btn" href="view.php?id=<?php echo $row["id"]; ?>">view</a>
					<a class="u-btn btn" href="update.php?id=<?php echo $row["id"];?>">update</a>

					<a onclick="return confirm('r u sure delete this')" class="d-btn btn" href="delete.php?id=<?php echo $row['id'];?>">delete</a>

					<a onclick="return confirm('r u sure clear history')"class="h-btn btn" href="history.php">clear history</a>
				</td>	
			</tr>
			<?php
			}
			?>
		</table>
	<div class="other-option">
		<div class="othrer-option-left">
			<a class="total" href="mtotalconst.php">monthly total cost</a>
		</div>
		<div class="othrer-option-left">
			
		</div>
	</div>
</div>
</body>
</html>