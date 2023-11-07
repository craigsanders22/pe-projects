<?php include('../header.php');?>


		
    <nav class="about-nav">
        <button id="goalButton">Goals</button>
        <button id="resumeButton">Resume</button>
    </nav>


    <div id="goals" class="page">
        <?php include('goals.php');?>
    </div>

    <div id="resume" class="page" style="display:none">
         <?php include('resume.php');?>
    </div>

    <script src="aboutme/scripts.js"></script>



<?php include('../footer.php');?>