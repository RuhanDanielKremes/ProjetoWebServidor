<?php
    session_start();
    include "../../public/breadcrumbs.php";
    $_SESSION['view'] = ($_SESSION['view'] == "admin") ? "user" : "admin";
    $dir = $breadcrumbs . "src/index.php";
    header("Location: $dir");
?>