<?php include 'form-header.php' ?>
<body>
  <div class="container">
  <h1 class="attention-voice">Product Lookup</h1>
  <form method="post">
    <label for="productName">
      <p class="calm-voice">Enter Product Name:</label></p>
    <p class="calm-voice"><input type="text" id="productName" name="productName" required><br><br></p>
    <button type="submit" name="lookup">Lookup</button>
  </form>
  <p id="result">
    <?php
      if (isset($_POST['lookup'])) {
      $productName = strtolower($_POST['productName']); // Convert input to lowercase
      $jsonData = file_get_contents('products.json');

      $data = json_decode($jsonData, true);
      $product = null;

      foreach ($data['products'] as $p) {
        if (strtolower($p['name']) === $productName) { // Convert product name to lowercase
          $product = $p;
          break;
        }
      }

      if ($product) {
        echo "Product: {$product['name']}<br>";
        echo "Price: $ {$product['price']}<br>";
        echo "Quantity: {$product['quantity']}";
      } else {
        echo "Sorry, we do not have that product in our inventory";
      }
    }
    ?>
  </p>
</body>
</html>
