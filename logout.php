<?php

require_once 'helper.php';

initializeSession();

logout();

function logout(): void
{
    session_destroy();
    header('Location: /login.php');
}