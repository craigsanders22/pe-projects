<?php include 'form-header.php' ?>


<title>Magic 8 Ball</title>

</head>

<body>
	<div class="container">
		<div class="inner-column">
			<h1>Magic 8 Ball</h1>

			<form id="questionForm">
				<h4><label for="question">Enter your question:</label></h4><br>
				<input type="text" id="question" name="question" style="width: 500px; height: 50px; font-size: 20px;" required><br><br>

				<button type="submit">Ask the 8 Ball</button>
			</form>

			<h4> <output id='output'></output> </h4>

		</div>
	</div>
<script src="8-ball.js"></script>
</body>
</html>
