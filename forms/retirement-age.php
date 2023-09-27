<?php include 'form-header.php' ?>




<body>
    <div class="container">
        <div class="inner-column">
            <h1>Retirement Calculator</h1>
            

            <form id="retirementForm">
                <label for="currentAge">Current Age:</label>
                <input type="number" id="currentAgeInput">
                <br><br>

                <label for="retireAge">Retirement Age:</label>
                <input type="number" id="retireAgeInput">
                <br><br>

                <button type="submit">How Long?</button>
                <button type="button">Clear</button>
                <br><br>

                <h4> <output id='output'></output> </h4>
            </form>
        </body>
        </html>

        <script src="retirement-age.js"></script>