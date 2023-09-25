
<?php
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
?>

<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Barang</h1>
                            </div>
                            <form action="../routers/r_market_list.php?aksi=tambah" method="POST" class="user" enctype="multipart/form-data">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="id"
                                        placeholder="Nama Barang" name="id" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_barang"
                                        placeholder="Nama Barang" name="nama_barang">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="harga"
                                        placeholder="Harga" name="harga">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="stock"
                                        placeholder="Stock" name="stock">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="foto" name="foto">
                                </div>

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah" id="tambah" name="tambah">
                                </div>

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
?>
