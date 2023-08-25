<?php 

		$theFlowers = file_get_contents('flowers.json');

		var_dump($theFlowers);
		$name = "";
		$hasName = false;
		$nameError = false; 
		

	$formSubmitted = isset($_POST["add"]);
		
		if ($formSubmitted) {

			if ( isset($_POST["name"] ) ){
				$name = $_POST['name'];

			if ( strlen($name) > 0) {
				$hasName = true;

			


			$newFlower = [
				"name" => $name,
			];

			var_dump($newFlower);

			

			//pull up the JSON

			$flowerJson = json_encode($newFlower);

	

			file_put_contents('flowers.json', $flowerJson);


			} else {
				$nameError = "Please add a name.";
			}
		}
	}

 ?>

<div class="inner-column">

	<h2>NOTE: Form is a prototype but could be easily fully functional and integrated w/ JSON</h2>

<h1 class="form-text">Add New Inventory</h1>

<form method='POST'>

	<field>
		<label>Flower Name</label>
		<input type="text" name='name' value='<?=$flower?>'>	
	</field>

	<field>
		<label>Breed</label>
		<input type="text" name='breed' value='<?=$breed?>'>	
	</field>

	<field>
		<label>Season</label>
		<input type="text" name='season1' value='<?=$season?>'>	
	</field>

	<field>
		<label>Color</label>
		<input type="" name='color' value='<?=$color?>'>	
	</field>

	<field>
		<label>Price</label>
		<input type="" name='price' value='<?=$price?>'>	
	</field>


	<field>	
		<button type="submit" name='add'>
		Submit
	</button>

	</field>
</form>
</div>

