<?php

	$price = 34;
	$tax = $price * .09;

	$total = $price + $tax;

	echo "<h1>" . $total . "</h1>";

	$percent = 15;

	if ($percent == 15) {
		$tip = $total * (15/100);
		$total = $total + $tip;
	}



?>