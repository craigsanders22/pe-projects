

<?php include 'form-header.php' ?>



 <script src="character-counter.js"></script>



<body>
    <h1>Character Counter</h1>
    <form>
        <label for="inputString">Enter something:</label>
        <input type="text" id="inputString" required>
        <br>
        <input type="button" value="Count Characters" onclick="countCharacters()">
    </form>
    <h4 id="result"></h4>

</body>
</html>