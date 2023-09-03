<?php include 'form-header.php' ?>

<body>
    <div class="container">
    <h1>Month Converter</h1>


    <form method="post" action="">
        <label for="number">Enter a month number (1-12): </label>
        <input type="number" name="number" min="1" max="12" required>
        <p><button type="submit">Name that month!</button></p>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = $_POST["number"];

        $months = [
            1 => "January",
            2 => "February",
            3 => "March",
            4 => "April",
            5 => "May",
            6 => "June",
            7 => "July",
            8 => "August",
            9 => "September",
            10 => "October",
            11 => "November",
            12 => "December",
        ];

        if (array_key_exists($inputNumber, $months)) {
            $monthName = $months[$inputNumber];
            echo "<h4>The name of the month is $monthName</h4";
        } else {
            echo "Invalid input. Please enter a number between 1 and 12.";
        }
    }


    ?>
</div>
</body>
</html>