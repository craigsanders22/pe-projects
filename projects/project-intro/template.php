

<?php include ('data/project-cards.php'); ?>
<div class="inner-column">
<project-grid>



  <ul class='project-list'>

    <?php foreach ($projects as $project) { ?>
      <li class='project'> 
       <?php include('project-cards/template.php'); ?>
      </li>
    <?php } ?>

  </ul>

</project-grid>
</div>



