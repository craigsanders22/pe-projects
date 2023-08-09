<h1>PHP Practice</h1>

<?php

	$first = "Craig";
	$last = "Sanders";

	if ($first) {

	} else {
		$first = "Default";
	}

	$full_name = $first . " " . $last;

	$age = 5 + 6 + 7 + 8 + 9;

?>


<p>My name is <?=$full_name?>. I am <?=$age?> years old!</p>

<hr>

<!-- Practice -->
<hr>

<?php

	$stock = rand(-2, 5);

	if ($stock > 0) {
		$message = 'In stock';
	} else {
			$message = 'Sorry, we are SOLD OUT for today! :(';
		}

	if ($stock > 0) {
		$order = '<a href="https://www.papajohns.com/order/menu/sides/jalapeno-popper-rolls?displayNutritionalInfo=false";?>Order Here!</a>';
	} else {
		

		}
	

	?>

	<html>
		<body>
			<h1>Popper Shop</h1>
			<h2>The World's Best Jalapeno Poppers</h2>
			<p>Our stock is currently <?=$stock?> poppers!</p>
			<p><?= $message ?></p>
			<p><?= $order ?></p>
		</body>
	</html>




