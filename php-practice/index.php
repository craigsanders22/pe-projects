<?php

	// defaults
	$first = "Craig"; // 1, true, "Craig"
	$last = "Sanders";

	// user interaction 
	if ( !isset($first) )  {
		$first = "Default"; // example of a form maybe?
	}

	$full_name = $first . " " . $last;

	$age = 5 + 6 + 7 + 8 + 9; // 2023 - 1988 === $day

	$myData = date("Y"); // https://www.php.net/manual/en/function.date.php

	$yearsLived = data("Y") - 1988;

	$stock = rand(-2, 5);

	if ($stock > 0) {
		$message = 'In stock';
	} else {
		$message = 'Sorry, we are SOLD OUT for today! :(';
	}

	// $message = 'Sorry, we are SOLD OUT for today! :(';

	// if ($stock > 0) {
	// 	$message = 'In stock';
	// }

	if ($stock > 0) {
		$order = '<a href="https://www.papajohns.com/order/menu/sides/jalapeno-popper-rolls?displayNutritionalInfo=false";?>Order Here!</a>';
	} else {
		
	}
?>

<html>
	<body>

		<h1>PHP Practice</h1>

		<p>My name is <?=$full_name?>. I am <?php echo $age; ?> years old!</p>

		
		<h1>Popper Shop</h1>

		<h2>The World's Best Jalapeno Poppers</h2>

		<p>Our stock is currently <?=$stock?> poppers!</p>
		<p><?= $message ?></p>
		<p><?= $order ?></p>

	</body>
</html>