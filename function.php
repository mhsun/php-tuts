<?php
function login($username, $password)
{
    if ($username === 'arman' && md5($password) === md5('123')) {
        header('Location: /home.php');
    } else {
        echo "Wrong username or password";
    }
}

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    login($username, $password);
}