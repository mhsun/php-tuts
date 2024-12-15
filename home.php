<?php

require_once 'function.php';

if (!isLoggedIn()) {
    header('Location: /login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
        .home-page {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .home-page h1 {
            margin-bottom: 1rem;
            color: #333;
        }
        .home-page p {
            margin-bottom: 1.5rem;
            color: #666;
        }
        .home-page a {
            display: inline-block;
            padding: 0.7rem 1.5rem;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 1rem;
        }
        .home-page a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
<div class="home-page">
    <h1>Welcome Back!</h1>
    <p>You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
