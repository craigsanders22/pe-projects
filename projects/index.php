<?php function showErrors() {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}

showErrors()
 ?>

<?php include('../header.php');?>


<section class='projects' id='projects'>
	<inner-column>

		<?php include('project-intro/template.php'); ?>

	</inner-column>
</section>

<?php include('../footer.php');?>



