


<style>

	* {
		
		width: 100;
	}

	ul {

		display: flex;
		flex-direction: row;
		list-style-type: none;
		padding: 20px;

	}


	monster-card{
		display: block;
		border: 5px dotted transparent;
  		border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  		border-image-slice: 1;
		max-width: 400px;
		padding-top: 20px;
	}

	


</style>


<?php 





$codey = [
	"id" => 10,
	"name" => "Codey",
	"favoriteFood" => "Mt. Dew Code Red",
	"age" => 7,
	"adopted" => true,
	"portrait" => "codey.jpg"


];

$limabean = [
	"id" => 20,
	"name" => "Lima Bean",
	"favoriteFood" => "English Peas",
	"age" => 4,
	"adopted" => false,
	"portrait" => "limabean.jpg"

];

$readsalot = [
	"id" => 30,
	"name" => "Ms Readsalot",
	"favoriteFood" => "Baguette",
	"age" => 9,
	"adopted" => false,
	"portrait" => "miss-reads-a-lot.jpg"

];

$mrbanana = [
	"id" => 30,
	"name" => "Mr Banana",
	"favoriteFood" => "Peanut Butter",
	"age" => 9,
	"adopted" => false,
	"portrait" => "mr-banana.jpg"

];


$fragoo = [
	"id" => 50,
	"name" => "Fragoo",
	"favoriteFood" => "Ragu",
	"age" => 12,
	"adopted" => false,
	"portrait" => "fragoo.jpg"

];

$orangina = [
	"id" => 60,
	"name" => "Orangina",
	"favoriteFood" => "Carrots",
	"age" => 0.5,
	"adopted" => true,
	"portrait" => "orangina.jpg"

];

$shadow = [
	"id" => 70,
	"name" => "Shadow",
	"favoriteFood" => "Ghosts",
	"age" => 999,
	"adopted" => false,
	"portrait" => "shadow.jpg"

];

$adoptionlist = [$codey, $limabean, $fragoo, $orangina, $shadow, $mrbanana, ];

echo "<ul>";

foreach ($adoptionlist as $monster) {
	$id = $monster["id"];

	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old!";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

	if ($status == 0) {
		$status = "Adopt Me!! I'd love to come destroy your forever home!";

	} else {
		$status = "Hooray! I'm now destroying someone else's home!";

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

echo "</ul>";

 ?>
