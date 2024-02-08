<?php
session_start();
require __DIR__.'./functions.php';
if (isset($_POST['password'])) {
    $temp = getPass($_POST["password"]);
    $_SESSION['password'] = $temp;
    header('Location: result.php');
}
?>