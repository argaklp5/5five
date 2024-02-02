<?php
session_start();
     include 'koneksi.php';
     if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
     }

     $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
     $p = mysqli_fetch_object($peserta);
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

    .table {
        width:100%;
        border-collapse: collapse;
        border:1px solid #ddd;
    }

    .table tr {
        height: 30px;
    }

    .table tr td {
        padding:6px 10px;
    }

    .table tr td:nth-child(1) {
        text-align: center;
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
        <h2>Detail Peserta</h2>
        <div class="box">

        <table class="table-data" border="0">
    <tr>
        <td>Kode Pendaftaran</td>
        <td>:</td>
        <td><?php echo $p->id_pendaftaran ?></td>
</tr>
<tr>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td><?php echo $p->th_ajaran ?></td>
</tr>
<tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><?php echo $p->jurusan ?></td>
</tr>
<tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?php echo $p->nm_peserta?></td>
</tr>
<tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $p->tmp_lahir.','.$p->tgl_lahir ?></td>
</tr>
<tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $p->jk ?></td>
</tr>
<tr>
        <td>Agama</td>
        <td>:</td>
        <td><?php echo $p->agama ?></td>
</tr>
<tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $p->almt_peserta ?></td>
</tr>
</table>

           
</div>
</section>


</body>
</html>