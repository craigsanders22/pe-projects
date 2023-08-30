<?php include 'form-header.php' ?>

<link rel="stylesheet" href="../forms.css">

<body>
    <div class="container">
    <h1>Simple Interest Calculator</h1>
    <p>Enter the amount of your principal or initial investment, the rate of interest, and the number of years to calculate and we'll let you know what the value will be!</p>
    <form method="post">
        <label for="principal">Principal amount:</label>
        <input type="number" id="principal" name="principal" required><br><br>

        <label for="rate">Rate of interest (%):</label>
        <input type="number" id="rate" name="rate" step="0.1" required><br><br>

        <label for="years">Number of years:</label>
        <input type="number" id="years" name="years" required><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>
    
    <?php
    if (isset($_POST['calculate'])) {
        $principal = floatval($_POST['principal']);
        $rate = floatval($_POST['rate']);
        $years = intval($_POST['years']);
        
        $interest = ($principal * $rate * $years) / 100;
        $totalAmount = $principal + $interest;
        
        echo "<div id='result'>";
        echo "After $years years at $rate% interest, the investment will be worth $" . number_format($totalAmount, 2) . ".";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
