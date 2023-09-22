
<?php include 'form-header.php' ?>

<body>
	<div class= "inner-column">
		<div class= "container">

			<h1>Temperature Converter</h1>
			<p>Input your known temperature in it's appropriate field to convert to the opposite scale</p>
			<br>
			<br>

			<form id="tempForm">
				<p><input id="inputFahrenheit" type="text" placeholder="Fahrenheit"></p>
				<p><input id="inputCelsius" type="text" placeholder="Celsius"></p>
				<p><button type="submit">Convert</button></p>
			</form>

			<p id="output"></p>
		</div>
	</div>

	<script src="temp-converter.js"></script>
</body>



