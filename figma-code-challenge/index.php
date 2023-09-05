<?php 
	$sections=['hero', 'main-content', 'feature' ]
?>

<?php include('header.php') ?>

<?php 
	foreach ($sections as $section) {
		include ($section . '.php');
	} 
 ?>



<?php //include('hero.php') ?>

<?php //include('main-content.php') ?>

<?php //include('feature.php') ?>

<?php //include('clients.php') ?>

<?php //include('FAQ.php') ?>

<?php //include('CTA.php') ?>

<?php include('footer.php') ?>