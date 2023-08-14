<?php include ('data/project-cards.php'); ?>

<link rel="stylesheet" href="../style.css">

<div class="inner-column">
<project-grid>


  <p>testing</p>
  <ul class='project-list'>

    <?php foreach ($projects as $project) { ?>
      <li class='project'> 
       <?php include('project-cards/template.php'); ?>
      </li>
    <?php } ?>

  </ul>

</project-grid>
</div>



