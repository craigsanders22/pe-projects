

<?php include ('data/project-cards.php'); ?>

<div class="inner-column">
<section class="project-grid">



  <ul class='project-list'>

    <?php foreach ($projects as $project) { ?>
      <li class='project'> 
       <?php include('project-cards/template.php'); ?>
      </li>
    <?php } ?>

  </ul>

</section>
</div>