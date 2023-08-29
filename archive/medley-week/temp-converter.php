<!DOCTYPE html>
<html>
<head>

<style>
  @import "styles/site.css";

 
  .container {
    width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ad858d;
    border-radius: 5px;
    text-align: center;

  }

  .container input {
    padding: 10px;
    font-size: 20px;
  }

  .container h2 {
    padding: 40px;
  }

  p {
    line-height: 1.8;
    padding-top: 10px;
  }

  h4 {
    font-family: optima;
    font-size: 1.5rem;
    margin-top: 50px;
    border: 5px solid #ad858d;
    padding: 20px;
  }




</style>
</head>

<body>

<div class="container">
  <h2 class="attention-voice">Temperature Converter</h2>
  <form method="post" action="">
    <label for="temperature"><p class="strong-voice">Enter temperature:</label>
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
      echo "<h4> The converted temperature is $converted_temperature &deg;C</h4>";
    }
  }
  ?>
</div>

</body>
</html>

