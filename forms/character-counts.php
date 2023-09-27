
<?php include "form-header.php" ?>

<body>

	<?php
$str = "";
$len = 0;
$summary = "";
$solution = "";


if ( isset($_POST["submitted"]) ) {

		$str = $_POST["string"]; 
		$len = strlen($str);
	
}

$summary = "<u>Your phrase is:</u> </br><br> <em> $str </em>";

$solution = "You have <b>$len characters</b> in your phrase<br> *including spaces and punctuation*"; 


?>

	<div class="container">
		<div class="inner-column">
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

</div>
</div>
</body>


