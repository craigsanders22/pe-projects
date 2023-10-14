<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
</head>
<body>
    <h2>Signup</h2>

    <form id="signupForm">
        <label for="firstName">Preferred Name:</label><br>
        <input type="text" id="firstName" name="firstName" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Signup">
    </form>

    <p>Already have an account? <a href="login.html">Login here</a></p>

    <script src="../js/signup.js"></script>
</body>
</html>
