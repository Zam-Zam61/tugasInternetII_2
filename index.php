<?php 
    include 'koneksi.php';
    
    if(isset($_POST['submit'])){
        //ambil 1 id terbesar dikolom pendaftaran sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pesanan, 5)) AS id FROM
            tb_pesanan");
            $d = mysqli_fetch_object($getMaxId);
            $generateId = 'P' .date('Y').sprintf("%05s", $d->id + 1);
            
            //proses insert
            $insert = mysqli_query($conn, "INSERT INTO tb_pesanan VALUES (
                '" .$generateId."',
                '" .$_POST['nm_penumpang']."',
                '" .$_POST['kota_asal']."',
                '" .$_POST['kota_tujuan']. "',
                '" .date('Y-m-d'). "',
                '" .$_POST['waktu_berangkat']. "',
                '" .$_POST['pesawat']. "',
                '" .$_POST['Bangku']. "',
                '" .$_POST['harga']. "',
                '" .$_POST['metode_bayar']. "'
                )");
             if($insert){
                echo '<script>window.location="struk.php?id='.$generateId.'"</script>';
             }else{
                echo 'gagal'.mysqli_error($conn);
             }
    }
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

        <h2> Form Pesan Tiket </h2>

        <!-- bagian form -->
        <form action="" method="post">

        <div class = "box">
            <table border="0" class="table-form">
            <tr>
                    <td>Jadwal Penerbangan</td>
                    <td>:</td>
                    <td>
                        <select class="input-control" name="jadwalp">
                            <option value="">--Cek Jadwal--</option>
                            <option value="12">Berangkat 12.00 - Tiba 13.30</option>
                            <option value="14">Berangkat 14.00 - Tiba 15.30</option>
                            <option value="17">Berangkat 19.00 - Tiba 20.30</option>
                            <option value="17">Berangkat 21.00 - Tiba 22.30</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Penumpang</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nm_penumpang" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Kota Asal</td>
                    <td>:</td>
                    <td>
                        <select class="input-control" name="kota_asal">
                            <option value="">--pilih--</option>
                            <option value="Bali">Bali</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Banjarbaru">Banjarbaru</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kota Tujuan</td>
                    <td>:</td>
                    <td>
                        <select class="input-control" name="kota_tujuan">
                            <option value="">--pilih--</option>
                            <option value="Bali">Bali</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Banjarbaru">Banjarbaru</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Berangkat</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_berangkat" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Waktu Berangkat</td>
                    <td>:</td>
                    <td>
                        <select class="input-control" name="waktu_berangkat">
                            <option value="">--pilih--</option>
                            <option value="Pukul 11.00">Pukul 11.00</option>
                            <option value="Pukul 13.00">Pukul 13.00</option>
                            <option value="Pukul 15.00">Pukul 15.00</option>
                            <option value="Pukul 19.00">Pukul 19.00</option>
                            <option value="Pukul 21.00">Pukul 21.00</option>
                            
                        </select>
                    </td>
                </tr>
                
            </table>
        </div>

        <h3>Data Pesawat</h3>
        <div class = "box">
            <table border="0" class="table-form">
                <tr>
                    <td>Nama Pesawat</td>
                    <td>:</td>
                    <td>
                    <select class="input-control" name="pesawat">
                            <option value="">--pilih--</option>
                            <option value="Citilink">Citilink</option>
                            <option value="Lion Air">Lion Air</option>
                            <option value="Garuda Indonesia">Garuda Indonesia</option>
                            <option value="NAM Air">NAM Air</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Bangku Pesawat</td>
                    <td>:</td>
                    <td>
                    <select class="input-control" name="Bangku">
                            <option value="">--pilih bangku--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="7">7 </option>
                            <option value="8">8 </option>
                            <option value="9">9 </option>
                            <option value="10">10 </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>
                    <select class="input-control" name="harga">
                            <option value="">--Harga--</option>
                            <option value="Ekonomi">Ekonomi Rp.250.000</option>
                            <option value="Premium">Premium Rp.500.000</option>
                            <option value="Bisnis">Bisnis Rp.1000.000</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td>:</td>
                    <td>
                    <select class="input-control" name="metode_bayar">
                            <option value="">--BAYAR--</option>
                            <option value="DANA">DANA</option>
                            <option value="Kredivo">Kredivo</option>
                            <option value="Gopay">Gopay</option>
                            <option value="Visa">Visa</option>
                            <option value="Bank BRI">BRI</option>
                            <option value="Bank BCA">BCA</option>
                            <option value="Bank Mandiri">Mandiri</option>
                            <option value="Permata Bank">Permata Bank</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" class="btn-pesan" value="Submit">
                    </td>
                </tr>
                </table>
        </div>
    </form>

    </section>
    
</body>
</html>