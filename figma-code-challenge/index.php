<?php
$page = isset($_GET['page']) ? $_GET['page'] : '1'; // Default to page 1 

if ($page == '1') {
    include 'page1.php';
    $cssFile = 'page1.css';
} elseif ($page == '2') {
    include 'page2.php';
    $cssFile = 'page2.css';
} elseif ($page == '3') {
    include 'page3.php';
    $cssFile = 'page3.css';
} else {
    include 'page1.php'; // Default to page 1 
    $cssFile = 'page1.css';
}
?>










