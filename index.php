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
            } else if ($content == "about") {
                include_once "content/about.php";
            }
        } else {
            include_once "content/index.php";
        }
        ?>        
    </div>
<?php include("layouts/footer.php") ?>