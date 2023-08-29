<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Temperature Converter</title>
</head>
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
</head>
<body>

  <div class="container">
    <h1 class="attention-voice">Temperature Converter</h1>
    <form method="post" action="">
      <label for="temperature">
        <p class="strong-voice">Enter temperature:
      </label></p>
      <input type="number" name="temperature" id="temperature" step="0.01" required><br><br>

      <label>Convert to:</label>
      <input type="radio" name="unit" value="celsius" checked> Celsius
      <input type="radio" name="unit" value="fahrenheit"> Fahrenheit<br><br>

      <input type="submit" name="convert" value="Convert">
    </form>
  
  <?php
  if (isset($_POST['convert'])) {
    $temperature = $_POST['temperature'];
    $unit = $_POST['unit'];
    
    if ($unit == 'celsius') {
      $converted_temperature = ($temperature * 9/5) + 32;
      echo "<h4>
      The converted temperature is $converted_temperature &deg;F</h4>";
    } elseif ($unit == 'fahrenheit') {
      $converted_temperature = ($temperature - 32) * 5/9;
      echo "<h4> The converted temperature is: $converted_temperature &deg;C</h4>";
    }
  }
  ?>
</div>

</body>
</html>

