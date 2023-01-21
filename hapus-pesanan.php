<?php
include 'koneksi.php';


if (isset ($_GET['id'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_pesanan
        WHERE id_pesanan = '".$_GET['id']."' ");
    echo '<script>window.location="data-pesanan.php"</script>';
}
?>