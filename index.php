<!DOCTYPE html>

<?php 

  $page = null;
  if ( isset($_GET["page"]) ) {
    $page = $_GET["page"];
  } else {
    $page = "home";
  }

  function getTemplate($page) {
    include($page . '.php');
  }
 ?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Craig Sanders</title>
  <link rel="stylesheet" href="styles/site.css">
</head>
<body>
  <header>

  <?php include('header.php');?>
</header>

<main>
  <?php include('home.php'); ?>
  <?php include('projects.php'); ?>
  <?php include('resume.php'); ?>
  <?php include('goals.php'); ?>
  <?php include('../contact.php'); ?>


</main>
</body>
</html>

  

<?php
 
  include('footer.php');?>