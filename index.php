<?php

$connect = mysqli_connect("localhost", "root", "root", "myproject");

$sql = "SELECT * FROM texts";

$result = mysqli_query($connect, $sql);

$items = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<title>Test</title>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col md-6">
			<form action="text.php" method ="post">
				<div class="form-group">
					<input type="text" class ="form-control" name ="text">
				</div>
				<div class="form-group">
					<button type = "submit" class ="btn btn-success">Отправить</button>
				</div>
			</form>
			<h3>Добавленные записи</h3>

			<?php foreach($items as $item)?>
			<p><?php echo $item ['text'];?></p>
			<?php endforeach;?>
		</div>
	</div>
</div>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>