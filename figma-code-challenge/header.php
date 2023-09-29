<!doctype html>
<html lang='en' class='special-magic no-js'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Figma to Code Sprint!</title>
		<meta name='description' content=' logoipsum'>
		<meta property='og:image' content='$todo'>
		<?php
		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $styles = [
            1 => 'styles/page1.css',
            2 => 'styles/page2.css',
            3 => 'styles/page3.css'
        ];

        $cssFile = isset($styles[$page]) ? $styles[$page] : 'styles/page1.css';

        echo '<link rel="stylesheet" href="' . $cssFile . '">';
		?>
		<link rel='stylesheet' href='styles/site.css'>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="/path/to/flickity.css" media="screen">
	</head>
	<body>
		<header class="site-header">
			<inner-column>
				<mast-head>
					<nav class='logo'>
						<?php if($page == 2): ?>	
							<img src="images/white-logo.svg" alt="White Logo">	
						<?php elseif(in_array($page, [1, 3])): ?>	
							<img src="images/blue-logo.svg" alt="Blue Logo">	
						<?php endif; ?>
					</nav>
                    


		<nav class='site-nav'>
			


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
		<?php if(in_array($page, [1, 2])): ?>
			<li><a href="#" class="language">
				<img src="images/world<?= $page==2 ? '-white' : '' ?>.svg" alt="World Flag">EN</a>
			</li>
		<?php endif; ?>

		<?php if($page == 3): ?>
			<li>
				<a class='button3' href="#">SignUp</a>
			</li>
		<?php endif; ?>
	
		<li>
			<a class='button2' href='#'>Login</a>
		</li>
	</ul>
</nav>
</mast-head>
</inner-column>
</header>
<main>
