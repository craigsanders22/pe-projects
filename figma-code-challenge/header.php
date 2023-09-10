

<!doctype html>

<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Figma to Code Sprint!</title>
		<meta name='description' content=' logoipsum'>
		<meta property='og:image' content='$todo'>
		   <?php
        $page = isset($_GET['page']) ? $_GET['page'] : '1'; // default to page 1 is set

        if ($page == '1') {
            $cssFile = 'styles/page1.css';
        } elseif ($page == '2') {
            $cssFile = 'styles/page2.css';
        } elseif ($page == '3') {
            $cssFile = 'styles/page3.css';
        } else {
            $cssFile = 'styles/page1.css'; // default to page 1 
        }

        echo '<link rel="stylesheet" href="' . $cssFile . '">';
    ?>

		<link rel='stylesheet' href='styles/site.css'>
	</head>

<body>
	
<header class="site-header">
	<inner-column>
	<mast-head>

		<nav class='logo'>

		<a class='home' href='#'>
			<img src="images/landscape.jpg" alt="">
		</a>
		</nav>

		<nav class='site-nav'>
			
		<input type="checkbox" id="toggle-menu" class="toggle-menu">
		<label for="toggle-menu" class="hamburger">
    		<div class="bar"></div>
    		<div class="bar"></div>
    		<div class="bar"></div>
			</label>


    		<ul>
	        	<li><a href="?page=1">Home</a></li>
	        	<li><a href="?page=2">Wavy</a></li>
	        	<li><a href="?page=3">Blue</a></li>
	        	<li><a href="?page=4">Features</a></li>
	        	<li><a href='#'>About Us</a></li>
    		</ul>
		</nav>


		<nav class='user-menu'>
			<ul>
				
						<?php if($page == 1): ?>
					<li><a href="#" class="language">
					<img src="images/world.svg" alt="">EN</a>
				</li>
				<?php endif ; ?>

						<?php if($page == 2): ?>
					<li><a href="#" class="language">
					<img src="images/world-white.svg" alt="">EN</a>
				</li>
				<?php endif ; ?>


				<?php if($page == 3): ?>
					<li>
					<a class='button3' href="#">SignUp </a>
				</li>
				<?php endif ; ?>

				<li>
					<a class='button2' href='#'>Login</a>
				</li>

			

			
			</ul>
		</nav>

	</mast-head>
	</inner-column>
	
</header>

<main>

