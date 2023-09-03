<?php include 'form-header.php' ?>

<body>
    <div class="container">
    <h1>Currency Converter</h1>
  
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="from_currency">Convert From:</label>
        <input type="radio" name="from_currency" value="USD" required> US Dollars (USD)
        <input type="radio" name="from_currency" value="EUR" required> Euros (EUR)<br><br>
        
        <label for="amount">Amount:</label>
        <input type="number" name="amount" step=".01" required><br><br>
        
        <label for="exchange_rate">Exchange Rate:</label>
        <input type="number" name="exchange_rate" step=".01" required><br><br>
        
        <input type="submit" name="convert" value="Convert">
    </form>


        <?php
    if (isset($_POST['convert'])) {
        $from_currency = $_POST['from_currency'];
        $amount = $_POST['amount'];
        $exchange_rate = $_POST['exchange_rate'];
        
        if ($from_currency === "USD") {
            $to_currency = "Euros (EUR)";
            $converted_amount = $amount * $exchange_rate;
        } elseif ($from_currency === "EUR") {
            $to_currency = "US Dollars (USD)";
            $converted_amount = $amount / $exchange_rate;
        }
        
        echo "<h4>Converted amount: " . number_format($converted_amount, 2) . " " . $to_currency;
    }
    ?></h4>
</div>

</body>
</html>
