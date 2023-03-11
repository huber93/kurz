<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ukol</title>
</head>
<body>
	
<h1>Ukol tabulka jmeno, vek</h1>

<?php


$jmeno = "Josef";
$vek = 40;

echo "<table border='1px black solid'>
<tr>
	<td>Věk</td>
	<td>{$vek} let</td>
</tr>
<tr>
	<td>Jméno</td>
	<td>$jmeno</td>
</tr>
</table>";


?>
<hr>

<table border="1">
	<tr>
		<td>Jméno</td>
		<td><?php echo $jmeno; ?></td>
	</tr>
	<tr>
		<td>Věk</td>
		<td><?php echo $vek; ?> let</td>
	</tr>
</table>



</body>
</html>