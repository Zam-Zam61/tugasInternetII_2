<?php 
//34.50
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pesanan </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>
<body>
    
    <h2>Bukti Cetak Untuk Admin</h2>
    <table class="table" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID pesanan</th>
                    <th>Nama Penumpang</th>
                    <th>Kota Asal</th>
                    <th>Kota Tujuan</th>
                    <th>Tanggal Berangkat</th>
                    <th>Waktu Berangkat</th>
                    <th>Nama Pesawat</th>
                    <th>Metode Bayar</th>
                    
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
                    <td><?php echo $row['kota_asal'] ?></td>
                    <td><?php echo $row['kota_tujuan'] ?></td>
                    <td><?php echo $row['tanggal_berangkat'] ?></td>
                    <td><?php echo $row['waktu_berangkat'] ?></td>
                    <td><?php echo $row['pesawat'] ?></td>
                    <td><?php echo $row['metode_bayar'] ?></td>
                
                </tr>
                <?php } ?>
            </tbody>
           </table>
   
    
</body>
</html>