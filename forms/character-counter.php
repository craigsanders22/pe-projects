<?php include 'form-header.php' ?>

<title>Character Counter</title>

<body>
    <div class="container">
        <div class="inner-column">
            <h1>Character Counter</h1>
            <p>Enter something you'd like counted and we'll magically count it in an instant!</p>
            <form id="countingForm">
                <p><label for="inputString">Let us have it:</label></p>
                <h4><textarea name="input" rows="5" cols="40" name="Feed me!" id="inputString" required></textarea>
                </h4>
                <br>
               
            </form>
            <h4><output id="output"></output></h4>
        </div>
    </div>
</body>

</body>
</html>

<script src="character-counter.js"></script>