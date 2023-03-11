<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Promenne</title>
</head>
<body>
	
<h1>Proměnné</h1>

<?php

$jmenoLektora = "Tony";

echo $jmenoLektora;
echo "<br>";
$jmenoLektora = "Kuba";
echo $jmenoLektora;
echo "<br>";
echo $jmenoLektora;
echo "<br>";
echo $jmenoLektora;
echo "<br>";
$aktualniDen = "Pátek";

//template string 
echo "Dneska školí lektor $jmenoLektora , protože je $aktualniDen.";
echo "<br>";
//toto nefunguje protoze '' neumí číst proměnné
echo 'Dneska školí $jmenoLektora , protože je $aktualniDen.';

//v PHP se cisla pisou bez "" a ''
// misto desetinne carky se pise tecka v programovani
// kdyz jsme uvnitr template stringu muzeme explicitne označit promennou pomocí {}
$teplota = 6.8;
echo "<br>";
echo "Dneska je $aktualniDen a je {$teplota}°C.";
echo "<br>";

//echa nemusi byt napsana do jednoho radku

echo "

	<h2>
	$jmenoLektora
	</h2>

";




?>

</body>
</html>