<!-- HTML5 Header -->
<?php require_once('parts/header.php'); ?>

<!-- HTML5 Content -->
<?php
    $current_page = $_SERVER['REQUEST_URI'];
    if ($current_page == '/' || $current_page == '/index.php') {
        include_once('pages/home/index.php');
    }
    if ($current_page == '/services' || $current_page == '/services/index.php') {
        include_once('pages/services/index.php');
    }
    if ($current_page == '/buy' || $current_page == '/buy/index.php') {
        include_once('pages/buy/index.php');
    }
    if ($current_page == '/sell' || $current_page == '/sell/index.php') {
        include_once('pages/sell/index.php');
    }
    if ($current_page == '/login' || $current_page == '/login/index.php') {
        include_once('pages/login/index.php');
    }
?>

<!-- HTML5 Footer -->
<?php require_once('parts/footer.php'); ?>