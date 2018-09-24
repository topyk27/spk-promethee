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
                				Kriteria Penerima Bantuan
                			</div>
                			<div class="panel-body">
                				<table class="table">
                                    <tr>
                                        <td>Nama</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_kriteria[0]['nama']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Bobot</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_kriteria[0]['bobot']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Jenis</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_kriteria[0]['jenis']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Subkriteria</h4>
                                        </td>
                                        <td></td>
                                        <td>
                                            <?php if ($_SESSION['level']=='superadmin'): ?>
                                                
                                           <a href="index.php?url=data_subkriteria_tambah&id=<?php echo $data_kriteria[0]['id'] ?>" class="btn btn-sm btn-success" style="float: right;">
                                                <i class="fa fa-plus"></i> Tambah
                                            </a>
                                            <?php endif ?> 
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
                                                    <?php foreach ($data_kriteria as $sub): ?>
                                                        <?php if ($sub['subkriteria_id'] != ""): ?>
                                                            <tr>
                                                                <td><?php echo $sub['nama_subkriteria']; ?></td>
                                                                <td><?php echo $sub['bobot_subkriteria']; ?></td>
                                                                <td>
                                                                    <?php if ($_SESSION['level']=='superadmin'): ?>
                                                                        
                                                                    <a href="index.php?url=data_subkriteria_ubah&id=<?php echo $sub['subkriteria_id'] ?>&kriteria_id=<?php echo $data_kriteria[0]['id']?>" class="btn btn-xs btn-warning" title="Ubah">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="config/subkriteria/proses_hapus.php?&id=<?php echo $sub['subkriteria_id'] ?>&kriteria_id=<?php echo $data_kriteria[0]['id']?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')" >
                                                                        <i class="fa fa-remove"></i>
                                                                    </a>
                                                                    <?php endif ?>
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