<?php
include './functions.php';
if (isset($_POST['password'])) {
    $temp = getPass($_POST["password"]);
    $_SESSION['password'] = $temp;
    header('Location: password.php');
} else {
    header('Location: index.php');
}
