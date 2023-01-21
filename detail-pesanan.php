<?php 
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $penumpang = mysqli_query ($conn, "SELECT * FROM tb_pesanan WHERE 
        id_pesanan = '".$_GET['id']."'");
    $p = mysqli_fetch_object($penumpang);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan | Administrator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
   
    <!--bagian header -->
    <header>
        <h1><a href="beranda.php">Admin</a></h1>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="data-pesanan.php">Data Pesanan</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!-- bagian content -->
    <section class="content">
        <h2>Detail Pesanan</h2>
        <div class="box">
         
                <table class="table-data" border="0">
                <tr>
                    <td>Kode Pemesanan</td>
                    <td>:</td>
                    <td><?php echo $p->id_pesanan ?></td>
                </tr>
                <tr>
                    <td>Nama Penumpang</td>
                    <td>:</td>
                    <td><?php echo $p->nm_penumpang ?></td>
                </tr>
                <tr>
                    <td>Kota Asal</td>
                    <td>:</td>
                    <td><?php echo $p->kota_asal ?></td>
                </tr>
                <tr>
                    <td>Kota Tujuan</td>
                    <td>:</td>
                    <td><?php echo $p->kota_tujuan ?></td>
                </tr>
                <tr>
                    <td>Tanggal Berangkat</td>
                    <td>:</td>
                    <td><?php echo $p->tanggal_berangkat ?></td>
                </tr>
                <tr>
                    <td>waktu berangkat</td>
                    <td>:</td>
                    <td><?php echo $p->waktu_berangkat ?></td>
                </tr>
                <tr>
                    <td>Nama Pesawat</td>
                    <td>:</td>
                    <td><?php echo $p->pesawat ?></td>
                </tr>
                <tr>
                    <td>Nomor Kursi</td>
                    <td>:</td>
                    <td><?php echo $p->Bangku ?></td>
                </tr>
                <tr>
                    <td>Kelas dan Harga</td>
                    <td>:</td>
                    <td><?php echo $p->harga ?></td>
                </tr>
                <tr>
                    <td>Metode Bayar</td>
                    <td>:</td>
                    <td><?php echo $p->metode_bayar ?></td>
                </tr>
            </table>

        </div>

    </section>

</body>
</html>