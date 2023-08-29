<?php include 'form-header.php' ?>

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

