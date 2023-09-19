<?php include 'form-header.php' ?>

<script src="retirement-age.js"></script>


<body>
    <h1>Retirement Calculator</h1>
    <label for="currentAge">Current Age:</label>
    <input type="number" id="currentAgeInput">
    <br><br>

    <label for="retireAge">Retirement Age:</label>
    <input type="number" id="retireAgeInput">
    <br><br>

    <button onclick="calculateRetirement()">Calculate</button>
    <br><br>

    <div id="output"></div>
</body>
</html>