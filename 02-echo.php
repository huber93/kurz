<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Echo</title>
</head>
<body>
<h1>Echo</h1>

<?php
//zde je králosvstí PHP
//PHP a HTML se nesmí míchat

//toto vyhodí chybu protoze zde muze byt jen php
//<h2>podnadpis</h2>

//pokud jsme uvnitř php bloku a chceme vypsat nějaký text nebo nějaké html, tak musíme použít funkci echo
echo "<h2>podnadpis</h2>";

// pravidla PHP
/*

	1) Kazdy prikaz musi byt ukonceny ; 
	2) Vsechny text musi byt ohraniceny ""
	3) nezalezi  na poctu mezer a radku mezi prikazy

*/

echo "<h2>dalsi podnadpis</h2>";



echo "<h2>dalsi podnadpis</h2>";

?>

	
</body>
</html>