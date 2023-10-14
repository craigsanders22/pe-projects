<!DOCTYPE html>

<?php 
    $page = isset($_GET["page"]) ? $_GET["page"] : 'login';
?>

<body>
    <header>
        <?php include('masthead.php'); ?>
    </header>

    <main>
        <?php include($page . '.php'); ?>
    </main>
</body>
</html>
