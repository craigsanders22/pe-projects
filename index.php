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



  <?php include('home'); ?>
  <?php include('projects'); ?>
  <?php include('resume'); ?>
  <?php include('goals'); ?>
  <?php include('contact'); ?>



<?php
 
  include('footer.php');?>