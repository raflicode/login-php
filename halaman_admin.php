<?php
require_once 'cek_admin.php'; // sudah include session + proteksi
include 'koneksi.php';

// dummy data
$total_pesanan = 12;
$total_pengunjung = 24;
$pendapatan = 5176000;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    display: flex;
}

.sidebar {
    width: 250px;
    background: #f5f5f5;
    height: 100vh;
    padding: 20px;
}

.logo {
    font-weight: bold;
    font-size: 20px;
}
.logo span {
    color: gold;
}

.profile {
    margin: 20px 0;
}

.menu a {
    display: block;
    padding: 12px;
    margin: 10px 0;
    text-decoration: none;
    color: black;
    border-radius: 20px;
}

.menu a.active {
    background: gold;
}

.main {
    flex: 1;
    background: black;
    padding: 20px;
}

.cards {
    display: flex;
    gap: 20px;
}

.card {
    background: #eee;
    padding: 20px;
    border-radius: 20px;
    flex: 1;
}

.charts {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.chart-box {
    background: #eee;
    padding: 20px;
    border-radius: 20px;
    flex: 1;
}
</style>
</head>

<body>

<div class="sidebar">
    <div class="logo">YAYUK <span>MAKEOVER</span></div>

    <div class="profile">
        <b><?= $_SESSION['email']; ?></b><br>
        <small><?= $_SESSION['role']; ?></small>
    </div>

    <div class="menu">
        <a href="#" class="active">Dashboard</a>
        <a href="#">Message</a>
        <a href="#">Manajemen User</a>
        <a href="#">Ganti Password</a>
        <a href="#">Pembayaran</a>
        <a href="logout.php" style="color:red;">Logout</a>
    </div>
</div>

<div class="main">

    <div class="cards">
        <div class="card">
            <h3>Total Pesanan</h3>
            <h1><?= $total_pesanan ?></h1>
        </div>

        <div class="card">
            <h3>Total Pengunjung</h3>
            <h1><?= $total_pengunjung ?></h1>
        </div>

        <div class="card">
            <h3>Pendapatan</h3>
            <h1>Rp <?= number_format($pendapatan,0,',','.') ?></h1>
        </div>
    </div>

    <div class="charts">
        <div class="chart-box">
            <h3>Jumlah Booking</h3>
            <canvas id="lineChart"></canvas>
        </div>

        <div class="chart-box">
            <canvas id="pieChart"></canvas>
        </div>
    </div>

</div>

<script>
new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
        labels: ['Januari','Februari','Maret','April','Mei','Juni'],
        datasets: [{
            label: 'Booking',
            data: [30,20,45,70,25,10],
            borderColor: 'gold',
            fill: false
        }]
    }
});

new Chart(document.getElementById('pieChart'), {
    type: 'doughnut',
    data: {
        labels: ['Kostum','Dekorasi','MakeUp Artist'],
        datasets: [{
            data: [53,15,30],
            backgroundColor: ['#c9a227','#f1c40f','#f7dc6f']
        }]
    }
});
</script>

</body>
</html>