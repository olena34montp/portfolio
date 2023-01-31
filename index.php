<?php
    session_start();

    if (!empty($_GET['theme'])){
        $_SESSION['theme'] = $_GET['theme'];
    }

    $page = filter_input(INPUT_GET,'page');
    include('common/template.php');
?>