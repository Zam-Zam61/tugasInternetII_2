<?php 
    include 'koneksi.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket Online</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- bagian box pemesanan 7 56 21.52 22.17-->
    <section class="box-pemesanan">

        <h2>Pesanan Berhasil</h2>
        <div class="box">
            <h4>kode pesanan anda adalah <?php echo $_GET['id'] ?></h4>
            <a href="cetak-struk.php?id=<?php echo $_GET ['id']?>" target="_blank" class="btn-cetak">Cetak Bukti Pesanan</a>
        </div>

    </section>
    
</body>
</html>