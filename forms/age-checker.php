<style>

body {
    margin: 0;
    padding: 0;
    background-color: #f7cfb6;

}

.container {
    max-width: 600px;
    margin: 100px auto;
    background-color: #ad858d;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
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

.container p {
    font-family: optima;
    font-size: 1.4rem;
    color: white;
    max-width: 35ch;
    margin: auto;
    padding-top: 20px;
    text-align: center;

}  


form {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}



input[type="number"] {
    width: 50%;
    padding: 10px;
    border: 3px solid #6c6874;
    border-radius: 5px;
}

button {
    padding: 10px 30px;
    background-color: #6c6874;
    font-family: optima;
    font-size: 1.1rem;
    color: #fff;
    border: 3px solid #fff;
    border-radius: 5px;
    cursor: pointer;
}

  h4 {
    font-family: optima;
    font-size: 1.5rem;
    color: white;
    text-align: center;
    
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