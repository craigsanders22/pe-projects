<html>
	<head>
		<style>
			header {
				color:red;
				border: 5px solid black;
			}

			p {
				
				color:slateblue;
			}
		</style>
	</head>

	<!-- practice area -->


		<p><?php echo "Hello, World";?></p>

		<h2> <?php echo "HELLOOOOO, WORLD!!!";?></h2>

		<p><?php echo 22;?></p>


		<p><?php echo 22 + 22;?></p>

		<?php

		$name = "Craig";
		$country = "Spain";
		$sentence = "Hello, my name is " . $name . " and I love " . $country . ".";

		echo $sentence;

		?>


		<p><?="What do you want? ", 100;?></p>

		<?php

		$itemone = 20;
		$itemtwo = 12;

		$total = $itemone + $itemtwo;


		echo $total;

		$referencetotext = " is your total.";

		echo $referencetotext;

		?>


		<?php 	

			$brandName = "Jalapeno Poppers";



		 ?>

		 <p>I was driving down the highway and I saw a sign for <?=$brandName?> so I knew I had to stop. Sometimes I really love to get a treat from <?=$brandName?>. Sadly, this time the food from <?=$brandName?> was super soggy. Sad.</p>


		 <?php 

		 	$website = "https://cooking.nytimes.com/recipes/1020843-jalapeno-poppers";

		 	?>

		 <h2>I guess I'll just have to make them myself using this <a href=<?=$website;?>>recipe</a>.</h2>





<!-- mad lib -->



	<body>
		<header>
			<h1>The Picnic</h1>
		</header>

		<?php 
			$month = "JANUARY" ;
			$number = "82nd" ;
			$place = "THE SWAMP" ;
			$nounOne = "BELL" ;
			$nounTwo = "CLOCK" ;
			$adjectiveOne = "STICKY" ;
			$adverbOne = "LOUDLY" ;
			$verbOne = "CRYING" ;
			$animalOne = "ANTEATERS" ;
			$animalTwo = "MICE" ;
			$adjectiveTwo = "CLEAN" ;
			$adjectiveThree = "STOMPS" ;
			$verbTwo = "SLEEP" ;
			$verbThree = "ROLL" ;
			$verbFour = "HOP" ;
		
			?>



		 <p> Every <?=$month?> <?=$number?> we always have a birthday picnic at <?=$place?>  We invite <?=$nounOne?> and <?=$nounTwo?>. It is next to a very <?=$adjectiveOne?> lake. </p>
			

		<p> We have to walk <?=$adverbOne?> to get there without <?=$verbOne?>. There are <?=$animalOne?> and <?=$animalTwo?> which are very <?=$adjectiveTwo?>. We eat lots of food that everyone <?=$adjectiveThree?>. The games are my favorite part.</p>

		<p>We play <?=$verbTwo?>ing and <?=$verbThree?>ing until we can’t walk anymore. Then we <?=$verbFour?> back and relax under the old shade tree until <?=$nounOne?> says, "Happy Birthday!"</p>
		
	
		
	</body>
</html>