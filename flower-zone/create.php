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

				//create montster

			//pull up the JSON

			$flowerJson = json_encode($newFlower);

			// save monster

			file_put_contents('flowers.json', $flowerJson);


			} else {
				$nameError = "Please add a name.";
			}
		}
	}

 ?>




<div class="inner-column">


<h1 class="form-text">Add New Inventory</h1>

<form method='POST'>

	<field>
		<label>Flower Name</label>
		<input type="text" name='name' value='<?=$name?>'>	
	</field>


	<field>	
		
	<button type="submit" name='add'>
		Submit
	</button>

	</field>
</form>




</div>









