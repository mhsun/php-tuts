<?php

require_once 'helper.php';

initializeSession();

function login($username, $password): void
{
    if ($username === 'admin' && md5($password) === md5('password')) {
        $_SESSION['user'] = $username;
        header('Location: /home.php');
    } else {
        flash('error', 'Wrong username or password');
    }
}

function isLoggedIn(): bool
{
    return array_key_exists('user', $_SESSION) && $_SESSION['user'] === 'admin';
}