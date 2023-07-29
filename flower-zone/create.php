<?php 
		$name = "";
		$breed = "";
		$type = "";
		$season = "";
		$colors = "";
		$price = 0;
		$priceError = false; 

	if ( isset($_POST["add"]) ) {
		
		if ( isset($_POST["name"]) ) {
			$name = $_POST["name"];

		if ( strlen($name) > 0) {
			$hasName = true;
			}
		}

		if ( isset($_POST["breed"]) ) {
			$breed = $_POST["breed"];

		if ( strlen($breed) > 0) {
			$hasBreed = true;
			}
		}

		if ( isset($_POST["type"]) ) {
			$type = $_POST["type"];

		if ( strlen($type) > 0) {
			$hasType = true;
			}
		}

		if ( isset($_POST["season"]) ) {
			$season = $_POST["season"];

		if ( strlen($season) > 0) {
			$hasSeason = true;
			}
		}

		if ( isset($_POST["colors"]) ) {
			$colors = $_POST["colors"];

		if ( strlen($colors) > 0) {
			$hasColors = true;
			}
		}
		
		if ( isset($_POST["price"]) ) {
			$price = $_POST["price"];

		if ( intval($price) > 0 ) {
			$hasPrice = true;
			} else {
				$priceError = "Please add a price.";
			}
		}

		if ($hasSeason && $hasColors) {
			echo "Has the goods!";
		} else {
			echo "no good!";
		}
	}

 ?>



<?php
//put sha1() encrypted password here - example is 'Hello'
$password = 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d';

session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
        die ('Incorrect password');
    }
} 

if (!$_SESSION['loggedIn']): ?>

<html><head><title>Login</title></head>
  <body>
    <h3>"Hello" You need to login</h3>
    <form method="post">
      Password: <input type="password" name="password"> <br />
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>

<?php
exit();
endif;
?>





<div class="inner-column">


<h1 class="form-text">Add New Inventory</h1>

<form method='POST'>

	<field>
		<label>Flower Name</label>
		<input type="text" name='name' value='<?=$name?>'>	
	</field>

	<field>
		<label>Breed</label>
		<input type="text" name='breed' value='<?=$breed?>'>
	</field>

	<field>
		<label>Plant Type</label>
		<input type="text" name='type' value='<?=$type?>'>
	</field>

	<field>
		<label>Growing Season</label>
		<input type="text" name='season' value='<?=$season?>'>
	</field>

	<field>
		<label>Color</label>
		<input type="text" name='colors' value='<?=$colors?>'>
	</field>

	<field>
		<label>Price</label>
		<input type="number" name='price' value='<?=$price?>'>
	</field>

	<field>	
		
	<button type="submit" name="add">
		Submit
	</button>

	</field>
</form>




</div>









