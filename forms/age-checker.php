
<?php include 'form-header.php' ?>

<body>
    <div class="container">
        <h1>Legal Driving Age</h1>
        <p>Just enter your current age and we'll let you know if you can legally drive a car.</p>
        <form action="age-checker.php" method="post">
            <p><label for="age">What is your age?</label></p>
            <input type="number" id="age" name="age" required>
            <p><button type="submit">Check</button></p>

        </form>
 
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['age'])) {
                $age = intval($_POST['age']);
                if ($age < 16) {
                    echo "<h4>You are not old enough to legally drive...&nbsp;&nbsp;&#128534 </h4>";
                } else {
                    echo "<h4>You are old enough to drive!&nbsp;&nbsp; &#128512</h4>";
                }
            } else {
                echo "<h4>Please provide your age.</h4>";
            }
        }
        ?>
    </div>
</body>
</html>