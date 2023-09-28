<?php 
    $sections=['hero', 'main-content', 'feature', 'clients', 'cta', 'faq' ];
?>

<?php include('header.php') ?>

<?php 
    foreach ($sections as $section) {
        $file = $section . '.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Error: cannot include '$file', as it does not exist.";
        }
    } 
?>

<?php include('footer.php') ?>
