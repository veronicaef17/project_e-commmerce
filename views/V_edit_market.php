<?php
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_market_list.php';

$market = new C_market_list();
?>
<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Barang</h1>
                            </div>
                            <form action="../routers/r_market_list.php?aksi=update" method="POST" data-parsley-validate class="user">
                                  <?php
                                        foreach ($market->edit($_GET['id']) as $b){
                                    ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="id"
                                     name="id" value="<?= $b->id?>" hidden>
                                </div>

                                <div class="form-group">           
                                    <input type="text" class="form-control form-control-user" id="nama_barang"
                                         name="nama_barang" value="<?= $b->nama_barang?>">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="harga"
                                        placeholder="Harga" name="harga" value="<?= $b->harga?>">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="stock"
                                        placeholder="Stock" name="stock" value="<?= $b->stock?>">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="foto" name="foto">
                                </div>

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Update" id="tambah" name="update">
                                </div>
                                            <?php } ?>
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
<?php
include_once 'template/footer.php'; 
?>                                 <?php 

?>