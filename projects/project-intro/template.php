<?php include ('data/project-cards.php'); ?>

<project-grid>

  <p>bacon</p>
  <ul class='project-list'>

    <?php foreach ($projects as $project) { ?>
      <li class='project'> 
        <p>tomato</p>
       <?php include('project-cards/template.php'); ?>
      </li>
    <?php } ?>

  </ul>

</project-grid>



