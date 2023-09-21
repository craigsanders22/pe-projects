<?php include 'form-header.php' ?>




<body>

	   <h1>Hello!</h1>
    <form onsubmit="sayHello(event)">
        <label for="inputString">What is your name?</label>
        <input type="text" id="inputString" required>
        <br>
        <input type="submit" value="Let's Meet">
    </form>
    <h4 id="result"></h4>



 <script src="saying-hello.js"></script>

</body>
</html>