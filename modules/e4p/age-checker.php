<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Legal Driving Age</title>
</head>
<body>
    <div class="container">
        <h1>Legal Driving Age</h1>
        <form action="age-checker.php" method="post">
            <label for="age">What is your age?</label>
            <input type="number" id="age" name="age" required>
            <button type="submit">Check</button>
        </form>
    </div>
</body>
</html>


 <?php
        if (isset($_POST['age'])) {
            $age = intval($_POST['age']);
            if ($age < 16) {
                echo "You are not old enough to legally drive.";
            } else {
                echo "You are old enough to drive.";
            }
        } else {
            echo "Please provide your age.";
        }
        ?>
        <p><a href="index.html">Go back</a></p>