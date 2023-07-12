<?php

	$price = 34;
	$tax = $price * .09;

	$total = $price + $tax;

	echo "<h1>" . $total . "</h1>";

	$percent = 15;

	echo "<h2> Percent tip: " . $percent . "%</h2>"
	;


	if ($percent == 15) {
		$tip = $total * (15/100);
	
	}

	if ($percent == 10) {
		$tip = $total * (10/100);
		
	}

	if ($percent == 20) {
		$tip = $total * (20/100);
		
	}

$total = $total + $tip;

echo "<p>The total is: $" . $total . "</p>"
?>


<?php 

$mySytuff = [1, 456, "bacon", "six", "Craig"];

$favoriteThing = $mySytuff[2];

echo $favoriteThing;

$dog = [

	"id" => 120,
	"name" => "Ebby",
	"deceased" => true,
	"bread" => ["black lab"],
];

echo $dog["name"];


?>

<p>My favorite thing is my <?=$favoriteThing?>.</p>

<p>My favorite dog is <?=$dog["name"]?>.</p>