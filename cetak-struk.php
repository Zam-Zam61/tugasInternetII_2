<?php 
//34.50
    include 'koneksi.php';
    
    $peserta = mysqli_query($conn, "SELECT * FROM tb_pesanan
        WHERE id_pesanan = '".$_GET['id']."' ");
        $p = mysqli_fetch_object($peserta);
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
    <script>
        window.print();
    </script>
</head>
<body>
    
    <h2>Bukti Pemesanan</h2>
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
   
    
</body>
</html>