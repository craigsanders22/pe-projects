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


  <?php include('header.php');?>


<main>
  <?php include('home.php'); ?>
  <?php include('projects/index.php'); ?>
  <?php include('resume.php'); ?>
  <?php include('goals.php'); ?>
  <?php include('contact.php'); ?>



<?php
 
  include('footer.php');?>