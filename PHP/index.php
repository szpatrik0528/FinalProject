<?php

header('Content-Type: text/html; charset=utf-8');
session_start();
require_once './classes/Database.php';
$db = new Database("localhost", "root", "", "jatek");

if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
}

require_once './layout/head.php';
?>

<body>
    
    <?php
    $menu = filter_input(INPUT_GET, "menu");
    require_once './layout/header.php';
    require_once './layout/menu.php';
    require_once './tartalom.php';
    require_once './layout/footer.php';
    ?>
    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>