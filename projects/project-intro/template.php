<?php include ('data/project-cards.php'); ?>



<body>

<header class='top' id="top">

<?php include('../header.php');?>

</header>


<main>
  <div class=inner-column>
  <section class="projects-intro">

    <project-grid>
    <ul class='project-list'>

      <?php foreach ($projects as $projects) { ?>
        <li class='project'>
          <?php include('data/project-cards.php'); ?>
        </li>
      <?php } ?>

    </ul>
  </project-grid>
</projects-intro>
</main>


<?php include('../footer.php');?>

</body>





