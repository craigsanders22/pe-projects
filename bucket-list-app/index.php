<!-- <!DOCTYPE html>

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
 -->

<!DOCTYPE html>

<?php 
    $valid_pages = ['login', 'signup', 'wayfinding', 'category-list', 'detail-page', 'mynewpage'];

    $page = isset($_GET['page']) && in_array($_GET['page'], $valid_pages) ? $_GET['page'] : 'login';
?>

<body>
    <header>
        <?php include('masthead.php'); ?>
    </header>

    <ul>
  <li><a href="?page=login">Login</a></li>
  <li><a href="?page=signup">Sign Up</a></li>
  <li><a href="?page=wayfinding">Wayfinding</a></li>
  <li><a href="?page=category-list">Category List</a></li>
  <li><a href="?page=detail-page">Detail Page</a></li>
  <li><a href="?page=mynewpage">My New Page</a></li>
</ul>


    <main>
        <?php include($page . '.php'); ?>
    </main>
</body>
</html>

