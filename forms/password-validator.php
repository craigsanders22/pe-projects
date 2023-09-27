<?php include 'form-header.php' ?>



<title>Login Page</title>

</head>
<body>
	<div class="container">
		<div class="inner-column">
	<h1>Login Page</h1>
	<form id="loginForm">
		<label for="username">Username:</label>
		<input type="text" id="username" required><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" required><br><br>

		<button type="submit">LOG IN</button>
	</form>



	<h4><output id='output'></output></h4>

</div>
</div>

	<script src="password-validator.js"></script>

</body>
</html>
