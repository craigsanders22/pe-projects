<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles/site.css">
</head>
<body>
	<?php
$page = isset($_GET['page']) ? $_GET['page'] : '1'; // Default to page 1 

if ($page == 'login') {
    include 'login.php';
    $cssFile = 'login.css';
} elseif ($page == 'signup') {
    include 'signup.php';
    $cssFile = 'signup.css';
} elseif ($page == '3') {
    include 'page3.php';
    $cssFile = 'page3.css';

}
?>





</body>
</html>