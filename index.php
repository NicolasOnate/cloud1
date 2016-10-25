<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>
		<?= 'Hola mundo' ?>
	</h1>

	<?php 
		for ($i=2; $i < 6 ; $i++) { 
			echo "<h$i> Como estás? </h$i>";
		}
	?>
</body>
</html>