<?php
  $heading = $projects['heading'];
  $description = $projects['description'];
  $thumbnail = $projects['thumbnail'];
  $link = $projects['link']
?>


<body>

<header class='top' id="top">

<?php include('../header.php');?>

</header>


<main>
  <div class=inner-column>
  <section class="projects-intro">

    <h1>
       Check out my Exercises for Programmers!
    </h1>

    <p>Exercises for Programmers is a book by Brian P. Hogan that includes practice exercises rooted in real-world scenarios. Here are some of my results: </p>

  
    <section class="project-cards">
<picture>
    <img src='images/<?=$thumbnail?>' alt='$todo'>
  </picture>

  <text-content>
    <h1 class='title strong-voice'><?=$heading?></h1>

    <p class='teaser'><?=$description?></p>

    <a class='button' href='e4p'>Take a Peek!</a>
  </text-content>
</section>
</section>
</div>
</main>


<?php include('../footer.php');?>

</body>





