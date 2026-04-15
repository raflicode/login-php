<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayuk Makeover</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            color: white;
        }

        /* NAVBAR */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 20px 60px;
            z-index: 2;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            color: white;
            font-weight: 500;
        }

        .nav-menu a.active {
            border-bottom: 2px solid gold;
            padding-bottom: 5px;
        }

        /* HERO */
        .hero {
            height: 100vh;
            background-image: url("asset/foto_mua.jpeg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* overlay gelap */
        .hero::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }

        .hero-content {
            text-align: center;
            z-index: 2;
        }

        .hero h1 {
            font-size: 60px;
            font-weight: 600;
        }

        .hero span {
            color: gold;
        }

        .hero p {
            margin: 20px 0;
            font-size: 18px;
            color: #ddd;
        }

        .btn-book {
            padding: 12px 30px;
            border: 2px solid gold;
            background: transparent;
            color: gold;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-book:hover {
            background: gold;
            color: black;
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="nav-menu">
        <a href="#" class="active">Home</a>
        <a href="#">Portofolio</a>
        <a href="#">Service</a>
        <a href="#">Gallery</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <div class="hero-content">
        <h1>Yayuk <span>Makeover</span></h1>
        <p>Makeup Profesional untuk Setiap Momen Spesialmu</p>
        <button class="btn-book">Book Now</button>
    </div>
</div>

</body>
</html>