<?php
session_start();
     include 'koneksi.php';
     if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
     }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online | Administrator</title>
    <link rel="stylesheet" type="text/css" href="CCS/style.css">
    <style>
        header {
    min-height: 70px;
    }

    header::after {
        content:'';
        display: block;
        clear: both;
    }

    header h1{
        padding:15px 25px;
        display: inline-block;
        float: left;
    }

    header ul {
        float: left;
    }

    header ul li {
        padding:24px 25px;
        display: inline-block;
    }

    a {
        text-decoration: none;
    }

    .content {
        width:90%;
        padding:10px;
        box-sizing: border-box;
        margin:50px auto;
    }

    </style>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>
<body>

    <!-- bagian header -->
    <header>
        <h1><a href="beranda.php">Admin PSB</h1>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="data-peserta.php">Data Peserta</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>
<!-- bagian content -->
    <section class ="content">
        <h2>Beranda</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di PSB Online.</h3>
</div>
</section>


</body>
</html>