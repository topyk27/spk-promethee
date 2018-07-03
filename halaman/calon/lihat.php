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
                				Calon Penerima Bantuan
                			</div>
                			<div class="panel-body">
                				<table class="table">
                                    <tr>
                                        <td>Nama</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon['nama']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon['jenis_kelamin']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon['kecamatan']; ?></td>            
                                    </tr>
                                    <?php foreach ($data_calon['kriteria'] as $key => $value): ?>
                                        <tr>
                                            <td><?php echo $key; ?></td>            
                                            <td>:</td>            
                                            <td><?php echo $value['value'] ?></td>            
                                        </tr>
                                    <?php endforeach ?>

                                </table>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->