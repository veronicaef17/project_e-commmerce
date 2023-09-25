<?php
    //modular untuk memanggil file dari folder template
    include_once 'template/header.php';
    include_once 'template/sidebar.php';
    include_once 'template/topbar.php';
   include_once '../controllers/C_market_list.php';

$market = new C_market_list();

?>
<div class="container-fluid">

                        <div class="input-field">
                                    <a href="V_input_barang.php" class="btn btn-primary mb-2">Tambah Barang</a>
                                </div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Market List</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stock</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($market->tampil() as $b){
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor++?></td>
                                        <td><?php echo $b->nama_barang?></td>
                                        <td><?php echo $b->harga?></td>
                                        <td><?php echo $b->stock?></td>
                                        <td><?php echo $b->foto?></td>
                                        <td>
                                            <div class="button1 ">
                                                <a onclick="return confirm('apakah yakin data akan dihapus')" href="../routers/r_market_list.php?id=<?= $b->id ?>&aksi=hapus"><button type="button" name="hapus" class="btn btn-primary">Hapus</button></a>
                                                <a href="../views/V_edit_market.php?id=<?= $b->id?>"><button type="button" class="btn btn-primary">Edit</button></a>
                                        </div>
                                        
                                        </td>
                                    </tr>
                                        <?php } ?>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stock</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </tbody>
                                    
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <?php
    //modular untuk memanggil file dari folder template
    include_once 'template/footer.php';
    
 ?>