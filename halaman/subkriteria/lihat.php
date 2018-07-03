        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Detail Data</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                	<div class="col-lg-12">
                		<div class="panel panel-info">
                			<div class="panel-heading">
                				subkriteria Penerima Bantuan
                			</div>
                			<div class="panel-body">
                				<table class="table">
                                    <tr>
                                        <td>Nama</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_subkriteria[0]['nama']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Bobot</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_subkriteria[0]['bobot']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Jenis</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_subkriteria[0]['jenis']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Subsubkriteria</h4>
                                        </td>
                                        <td></td>
                                        <td>
                                           <a href="index.php?url=data_subsubkriteria_tambah" class="btn btn-sm btn-success" style="float: right;">
                                                <i class="fa fa-plus"></i> Tambah
                                            </a> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Bobot</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data_subkriteria as $sub): ?>
                                                        <?php if ($sub['subsubkriteria_id'] != ""): ?>
                                                            <tr>
                                                                <td><?php echo $sub['nama_subsubkriteria']; ?></td>
                                                                <td><?php echo $sub['bobot_subsubkriteria']; ?></td>
                                                                <td>
                                                                    <a href="index.php?url=data_subsubkriteria_ubah&id=<?php echo $sub['subsubkriteria_id'] ?>" class="btn btn-xs btn-warning" title="Ubah">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="config/subsubkriteria/proses_hapus.php?&id=<?php echo $sub['subsubkriteria_id'] ?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')" >
                                                                        <i class="fa fa-remove"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->