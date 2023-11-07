<?php include('../header.php');?>

<style>
    .about-container {

    perspective: 800px;
    margin-left: auto;
    margin-right: auto;
    max-width: 400px;
    padding: 20px;
    margin-top: 40px;
    margin-bottom: 40px;
}

.toggle {
    position: relative;
    border: solid var(--main-dark);
    border-radius: var(--border-radius);
    transition: transform cubic-bezier(0, 0, 0.30, 2) .4s;
    transform-style: preserve-3d;
    perspective: 800px;
}

.toggle>input[type="radio"] {
    display: none;
}

.toggle>#goalButton:checked~#flap {
    transform: rotateY(-180deg);
    
}

.toggle>#goalButton:checked~#flap>.content {
    transform: rotateY(-180deg);

}

.toggle>#resumeButton:checked~#flap {
    transform: rotateY(0deg);



}

.toggle>label {
    display: inline-block;
    min-width: 170px;
    
    padding: 30px;

    text-align: center;
    color: var(--main-white);
    cursor: pointer;
}

.toggle>label,
.toggle>#flap {
    font-weight: bold;
    text-transform: capitalize;
}

.toggle>#flap {
    position: absolute;
    top: calc( 0px - var(--border-width));
    left: 50%;
    height: calc(100% + var(--border-width) * 2);
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
  
    background-color: var(--main-gray);
    border-top-right-radius: var(--border-radius);
    border-bottom-right-radius: var(--border-radius);
    transform-style: preserve-3d;
    transform-origin: left;
    transition: transform cubic-bezier(0.4, 0, 0.2, 1) .5s;
}

.toggle>#flap>.content {
    color: #333;
    transition: transform 0s linear .25s;
    transform-style: preserve-3d;
}
</style>

<div class="about-container">

       <form class="toggle">
           
            <input type="radio" id="goalButton" name="choice" value="goals">
            <label for="goalButton">GOALS</label>

            <input type="radio" id="resumeButton" name="choice" value="resume">
            <label for="resumeButton">RESUME</label>

            <div id="flap"><span class="content">switch</span></div>

        </form>

</div>

<div id="goals" class="page">
    <?php include('goals.php');?>
</div>

<div id="resume" class="page" style="display:none">
    <?php include('resume.php');?>
</div>
    <script src="aboutme/scripts.js"></script>



<?php include('../footer.php');?>