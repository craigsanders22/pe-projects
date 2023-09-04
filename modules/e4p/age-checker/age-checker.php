<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Driving Age</title>
</head>
<body>
    <div class="container">
        <h1>Legal Driving Age</h1>
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
    </div>
</body>
</html>
