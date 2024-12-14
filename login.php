<?php

require_once 'function.php';
require_once 'helper.php';

if (!empty($_POST)) {
    $username = validate_input($_POST['username']);
    $password = validate_input($_POST['password']);

    if (!empty($username) && !empty($password)) {
        login($username, $password);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .login-form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-form h2 {
            margin-bottom: 1rem;
            text-align: center;
        }

        .login-form label {
            display: block;
            margin: 0.5rem 0 0.2rem;
        }

        .login-form input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .login-form button {
            width: 100%;
            padding: 0.7rem;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        .login-form button:hover {
            background: #0056b3;
        }

        small {
            color: red;
        }

        .mt-10 {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<form class="login-form" method="post" action="">
    <h2>Login</h2>
    <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <small><?= getError('username') ?></small>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <small><?= getError('password') ?></small>
    </div>

    <button class="mt-10" type="submit">Login</button>
</form>
</body>
</html>