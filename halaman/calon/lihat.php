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
                                        <td>Nomor KK</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['no_kk']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Nama</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['nama']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['jenis_kelamin']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['kecamatan']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Usia</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['usia']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Status Perkawinan</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['status_perkawinan']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Pendidikan</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['pendidikan']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Jenis Kecacatan</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['jenis_kecacatan']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Penyebab Kecacatan</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_calon[0]['penyebab_kecacatan']; ?></td>            
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