<?php
     include 'koneksi.php';
     if(isset($_POST['submit'])){

        //.ambil id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM
             tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
        echo $generateId;

        // proses insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
                '".$generateId."',
                '".date('Y-m-d')."',
                '".$_POST['th_ajaran']."',
                '".$_POST['jurusan']."',
                '".$_POST['nm_peserta']."',
                '".$_POST['tmp_lahir']."',
                '".$_POST['tgl_lahir']."',
                '".$_POST['jk']."',
                '".$_POST['agama']."',
                '".$_POST['alamat']."'
             )");

        if($insert){
            echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
        }else{
            echo 'huft '.mysqli_error($conn);
        }
         
     }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online</title>
    <link rel="stylesheet" type="text/css" href="CCS/style.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
<!-- bagian box formulir -->
<section class="box-formulir">
    <h2>Formulir Pendaftaran Siswa Baru SMK NEGERI LABUANG</h2>

    <!-- bagian form -->
    <form action="" method="post">
        <div class="box">
            <table border="0" class="table-form">
                <tr>
                    <td>Tahun Ajaran </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="th_ajaran" class="input-control"
                        value="2024/2025" readonly>
</td>
                </tr>
                <tr>
                    <td>Jurusan </td>
                    <td>:</td>
                    <td>
                       <select class="input-control" name="jurusan">
                        <option value="">--pilih--</option>
                        <option value="Teknik Otomotif">Teknik Otomotif</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
</select>
</td>
                </tr>

            </table>
</div>
<h3>Data Diri Calon Siswa</h3>
<div class="box">
            <table border="0" class="table-form">
                <tr>
                    <td>Nama Lengkap </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nm_peserta" class="input-control">
</td>
                </tr>
                <tr>
                    <td>Tempat Lahir </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmp_lahir" class="input-control">
</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir </td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl_lahir" class="input-control">
</td>
                </tr>
               
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                    &nbsp; <input type="radio" name="jk" class="input-control" value="Laki-Laki"> Laki-Laki &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                       <select class="input-control" name="agama">
                        <option value="">--pilih--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="katolik">katolik</option>
                        <option value="khonghuchu">khonghuchu</option>
</select>
</td>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td>
                    <td>:</td>
                    <td>
                        <textarea class="input-control" name="alamat"></textarea>
</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
</td>
                </tr>

            </table>
</div>
</form>
</section>

</body>
</html>