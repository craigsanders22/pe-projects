<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles/site.css">
</head>
<body> -->
	<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'wayfinding'; // Default to page 1 

if ($page == 'login') {
    include 'login.php';
    $cssFile = 'login.css';
} elseif ($page == 'signup') {
    include 'signup.php';
    $cssFile = 'signup.css';
} elseif ($page == 'wayfinding') {
    include 'wayfinding.php';
    $cssFile = 'wayfinding.css';

}
?>

<!-- 



</body>
</html> -->