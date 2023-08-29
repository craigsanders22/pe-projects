<style>

body {
    margin: 0;
    padding: 0;
    background-color: #f7cfb6;
}

.container {
    max-width: 400px;
    margin: 100px auto;
    background-color: #ad858d;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(1, 4, 4, 0.1);
}

h1 {
    font-family: palatino;
    color: #fff;
    font-size: 2.1rem;
    text-align: center;
    margin-bottom: 20px;
}

.container form {
    font-family: optima;
    font-size: 1.4rem;
    color: white;
}

form {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="submit"]
{
    font-size:64px;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #6c6874;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #a7868d;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}


</style>





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
            <p><label for="age">What is your age?</label>
            <input type="number" id="age" name="age" required>
            <p><button type="submit">Check</button></p>

        </form>
    </p>
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
