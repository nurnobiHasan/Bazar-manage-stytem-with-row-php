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
		<form action="sent.php" method="post">
			<h2 class="add-bazar">add ajker bazar:</h2>
			<label for="id">bazar no:</label>
			<input type="number" name="id" id="id" placeholder="wrirte bazer no.....">

			<label for="date">bazar date:</label>
			<input type="text" name="date" id="date" placeholder="write bazar date.....">

			<label for="dat">bazar day:</label>
			<input type="text" name="day" id="day" placeholder="write bazar day.....">

			<label for="people">people name:</label>
			<input type="text" name="people" id="people" placeholder="write people name.....">

			<label for="ex-cost">extra cost:</label>
			<input type="text" name="ex-cost" id=ex-cost"placeholder="write extra cost .....">

			<label for="total-cost">total cost</label>
			<input type="text" name="total-cost" id="total-cost" placeholder="write total cost.....">

			<input type="reset" value="change">
			<input type="submit" value="submit" name="submit">
			<a style='margin-top:12px' class="u-btn btn" href="index.php">go back</a>
		</form>
	</div>
</body>
</html>