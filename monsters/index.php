


<style>

	ol {
		display: flex;
		flex-direction: row;
		padding-left: 20px;

	}

	monster-card{
		display: block;
		border: 5px dotted blue;
	}

	


</style>


<?php 





$codey = [
	"id" => 10,
	"name" => "Codey",
	"favoriteFood" => "Mt. Dew Code Red",
	"age" => 7,
	"adopted" => true,
	"portrait" => "https://peprojects.dev/images/portrait.jpg"


];

$limabean = [
	"id" => 20,
	"name" => "Lima Bean",
	"favoriteFood" => "English Peas",
	"age" => 4,
	"adopted" => false,
	"portrait" => "https://peprojects.dev/images/portrait.jpg"

];

$readsalot = [
	"id" => 30,
	"name" => "Ms Readsalot",
	"favoriteFood" => "Baguette",
	"age" => 9,
	"adopted" => false,
	"portrait" => "https://peprojects.dev/images/portrait.jpg"

];

$adoptionlist = [$codey, $limabean, $readsalot];

echo "<ol>";

foreach ($adoptionlist as $monster) {
	$id = $monster["id"];

	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old!";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

	if ($status == 0) {
		$status = "Adopt Me!!";

	} else {
		$status = "I'm now destroying someone else's home!";

	}


echo "<li class = 'monster'>";


echo 
	"<monster-card id='" . $id . "'>" .
		"<picture class='portrait'>" . 
			"<img src='" . $portrait . "' width='300'>" .
		"<h2 class= 'name'>" . $monster['name'] . "</h2>" .
		"<p class= 'story'>" . $story . "</p>" .
		"<p class= 'status'>" . $status. "</p>" .

	"</monster-card>";

echo "</li>";

}

echo "</ol>";

 ?>
