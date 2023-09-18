

<?php include 'form-header.php' ?>



 <script src="character-counter.js"></script>



<body>
   <h1>Character Counter</h1>
    <form onsubmit="countCharacters(event)">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" required>
        <br>
        <input type="submit" value="Count Characters">
    </form>
    <h4 id="result"></h4>

</body>
</html>