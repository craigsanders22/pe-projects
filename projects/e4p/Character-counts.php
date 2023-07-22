
<?php
$str = "";
$len = 0;
$summary = "";
$solution = "";


if ( isset($_POST["submitted"]) ) {

		$str = $_POST["string"]; 
		$len = strlen($str);
	
}

$summary = "Your phrase is:<b> $str </b>";

$solution = "You have <b>$len characters</b> in your phrase<br> *including spaces and punctuation*"; 


?>


<form method="POST">

	<h1>Character Counts!</h1>

	<div class='field'>
	
		<label>Give us your favorite phrase:</label>
		<textarea name="string" rows="5" cols="40" value="<?=$str?>"></textarea>
		
	</div>
	
	<button type="submit" name="submitted">
		Let's Count!
	</button>


	<h3><?= $summary ?></h3> 
	<h2><?= $solution ?></h2> 

	
</form>


<style>

	* {
	background-color: #2a3748;
	color: white;
}

	form {
		padding-top: 100px;
		padding-left: 100px;
		max-width: 600px;
		
	}

	.field {

		max-width: 300px;
		display: flex;
		flex-direction: column;
	}

	.field label {
		font-size: 16px;
		font-family: sans-serif;
		margin-bottom: 5px;
	}


	button[type="submit"], .field + .field {
		margin-top: 20px;
	}

	button {
		font-size: 16px;
		background-color: #37948d;
		padding: 10px 20px;
		outline: 3px solid white;
	}

	h1 {
		font-size: 40px;
	}

	em {
		font-size: 28px;
		text-transform: uppercase;
	}


	h2 {
		font-family:didot;
		
		font-size: 24px;
		font-weight: 700;
		letter-spacing: 1.2;
		text-decoration: none;
		margin-top: 100px;	
	}

	h3 {
		font-family: didot;
		
		font-size: 18px;
		font-weight: 500;
		margin-top: 40px;
	}



	p {
		font-size: 16px;
		font-weight: 400;
	}


</style>
