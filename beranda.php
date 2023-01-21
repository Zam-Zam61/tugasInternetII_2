<?php 
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
    
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
        <h2>Beranda</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama']?>, Selamat Datang di Menu Admin</h3>
        </div>

    </section>

</body>
</html>