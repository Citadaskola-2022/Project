<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    $_SESSION['username'] = $username;
}


view('/users/register.php');