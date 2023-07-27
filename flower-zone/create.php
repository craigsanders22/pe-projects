<?php 

	if ( isset($_POST["add"]) ) {
		
		$hasName = $_POST["Flower Name"];



		echo "added";
	}

 ?>




<h1>Inventory CRUD</h1>

<form method='POST'>

	<field>
		<label>Flower Name</label>
		<input name='Flower Name'>
	</field>


	<field>
		<label>Breed</label>
		<input type="text" name='breed'>
	</field>


	<field>
		<label>Plant Type</label>
		<input type="text" name='plant-type'>
	</field>


	<field>
		<label>Growing Season</label>
		<input type="text" name='growing-season'>
	</field>

	<field>
		<label>Color</label>
		<input type="text" name='colors'>
	</field>

	<field>
		<label>Price</label>
		<input type="number" name='price'>
	</field>

	<button type="submit" name="add">
		Submit
	</button>
</form>