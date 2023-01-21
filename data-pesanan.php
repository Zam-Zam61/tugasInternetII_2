<?php 
    session_start();
    include 'koneksi.php';
    
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
        <h2>Data Pesanan Tiket</h2>
        <div class="box">
            <a href="cetak-admin.php" target="_blank" class="btn-cetak">Print</a>
           <table class="table" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID pesanan</th>
                    <th>Nama Penumpang</th>
                    <th>Nama Pesawat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $list_pesanan = mysqli_query($conn, "SELECT * FROM 
                tb_pesanan");
                while($row = mysqli_fetch_array($list_pesanan)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['id_pesanan'] ?></td>
                    <td><?php echo $row['nm_penumpang'] ?></td>
                    <td><?php echo $row['pesawat'] ?></td>
                
                    <td>
                        <a href="detail-pesanan.php?id=<?php echo $row['id_pesanan'] ?>">Detail</a> ||
                        <a href="hapus-pesanan.php?id=<?php echo $row['id_pesanan'] ?>" 
                        onclick="return confirm('Yakin Hapus Pesanan ?')">Hapus Pesanan</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
           </table>
        </div>

    </section>

</body>
</html>