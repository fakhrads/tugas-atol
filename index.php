<?php
session_start();
require('config/mainconfig.php');
?>

<?php include("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
    <div class="container-fluid page-body-wrapper">
        <?php
        if(isset($_GET['content'])) {
            $content = $_GET['content'];
            if ($content == "cekgejala") {
                include_once "content/cek-gejala.php";
            } else if ($content == "cuaca") {
                include_once "content/cuaca.php";
            } else if ($content == "transaksi-peminjaman") {
                include_once "content/transaksi.php";
            } else if ($content == "rak-buku") {
                include_once "content/rak-buku.php";
            }
        } else {
            include_once "content/index.php";
        }
        ?>        
    </div>
<?php include("layouts/footer.php") ?>