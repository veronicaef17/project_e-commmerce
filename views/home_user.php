<?php
    //modular untuk memanggil file dari folder template
    include_once 'template/header.php';
    include_once 'template/sidebar.php';
    include_once 'template/topbar.php';
?>
    <
<div class="container-fluid">
    <h1>Selamat datang <?= $_SESSION['data'] ['nama'] ?>, sebagai role <?= $_SESSION['data'] ['role'] ?></h1>
</div> 
<?php
    //modular untuk memanggil file dari folder template
    include_once 'template/footer.php'; 
 ?>