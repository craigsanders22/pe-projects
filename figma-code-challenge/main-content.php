<?php
if(isset($_GET['page'])) {
    $page = $_GET['page'];
    
    if($page == 1) {
        $sectionClass = "page1-center-content";
    } elseif($page == 2) {
        $sectionClass = "page2-center-content";
    } elseif($page == 3) {
        $sectionClass = "page3-center-content";
    } 
} 
?>

<section class="center-content <?php echo $sectionClass; ?>">
    <inner-column>
        <div class="center-text">
        	 <?php if($page == 2): ?>
            <img class="cloud-icon" src="images/upload.png" alt="">
        <?php endif; ?>
            <p class="quiet-voice">
                Rhoncus, Accumsam Dictum
            </p>

            <h2 class="attention-voice">
                Etiam Nulla Lfulputate.
            </h2>

            <p class="quiet-voice">
                Neque, Pulvinar Vestibulum Non Aliquam.
            </p>
        </div>
        <?php if($page == 1): ?>
        <div class="video-player">
            <img src="https://peprojects.dev/images/cloud.png" alt="">
        </div>
        <?php endif; ?>
        <?php if($page == 2): ?>
            <button class="calm-voice">Learn More -></button>
        <?php endif; ?>
    </inner-column>
</section>
