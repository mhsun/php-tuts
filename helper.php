<?php

function initializeSession(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function getError($key): string
{
    if (isset($_POST[$key]) && empty($_POST[$key])) {
        return ucfirst($key). ' is required';
    }

    return '';
}

function validateInput($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

function flash($key, $message = null)
{
    initializeSession();

    if ($message) {
        $_SESSION[$key] = $message;
        return null;
    }

    $message = $_SESSION[$key] ?? '';
    unset($_SESSION[$key]);
    return $message;
}

function old($key): string
{
    return $_POST[$key] ?? '';
}