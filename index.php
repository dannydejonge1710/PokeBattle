<?php

require 'Pokemon.php';
require 'Pickachu.php';
require 'Charmeleon.php';
require 'Attacks.php';
require 'Resistance.php';
require 'Weakness.php';


$pickachu = new Pickachu('Pickachu 1'); 

printAction($pickachu);

$weaknessCharmeleon = new Weakness('Water', 2);
$resistanceCharmeleon = new Resistance('Lightning', 10);
$attackOneCharmeleon = new Attacks('Head Butt', 10);
$attackTwoCharmeleon = new Attacks('Flare', 30);

$charmeleon = new Charmeleon('Charmeleon', 'Fire', 60, $weaknessCharmeleon, $resistanceCharmeleon, $attackOneCharmeleon, $attackTwoCharmeleon);

printAction($charmeleon);

$pickachu->Attack($charmeleon, 0);


printAction('Pickachu valt aan met');

function printAction($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PokeBattle</title>	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div id="wrapper">

		<div class="row">
			<div style="border-right: 1px solid black" class="col" style="float: left;">
				<h2>Pickachu</h2>
				<img style="width: 300px" src="img/pickachu.png">
			</div>

			<img style="width: 80px; height: 50px;" src="img/vs.png">

			<div style="border-left: 1px solid black" class="col">
				<h2>Charmeleon</h2>
				<img style="width: 300px" src="img/charmeleon.png">
			</div>
		</div>
	</div>

</body>
</html>


