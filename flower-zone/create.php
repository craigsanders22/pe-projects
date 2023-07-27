<?php 

	if ( isset($_POST["add"]) ) {
		echo "added";
	}

 ?>




<h1>Inventory CRUD</h1>

<form method='POST'>

	<field>
		<label>Flower Name</label>
		<input type="text">
	</field>


	<field>
		<label>Breed</label>
		<input type="text">
	</field>


	<field>
		<label>Plant Type</label>
		<input type="text">
	</field>


	<field>
		<label>Growing Season</label>
		<input type="text">
	</field>

	<field>
		<label>Color</label>
		<input type="text">
	</field>

	<field>
		<label>Price</label>
		<input type="number">
	</field>

	<button type="submit" name="add">
		Submit
	</button>
</form>