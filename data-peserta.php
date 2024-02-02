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

    .btn-cetak {
    display: inline-block;
    padding:10px 17px;
    color:#fff;
    background-color: #FF5733;
    margin-top: 5px;
    margin-bottom: 10px;
}

@media screen and (max-width: 768px){
    .box-formulir{
        width:90%;
    }
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
        <h2>Data Peserta</h2>
        <div class="box">
            <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $list_peserta = mysqli_query($conn, "SELECT * FROM
                             tb_pendaftaran"); 
                        while($row = mysqli_fetch_array( $list_peserta)){    
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td><?php echo $row['jk'] ?></td>
                        <td>
                            <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran']; ?>">Detail</a> ||
                            <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran']; ?>" onclick="return confirm('Yakin ?')
                                "> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
</div>
</section>


</body>
</html>