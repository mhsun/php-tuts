<?php
function login($username, $password)
{
    if ($username === 'arman' && md5($password) === md5('123')) {
        header('Location: /home.php');
    } else {
        echo "Wrong username or password";
    }
}