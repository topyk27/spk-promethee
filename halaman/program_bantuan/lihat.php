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
                				program_bantuan Penerima Bantuan
                			</div>
                			<div class="panel-body">
                				<table class="table">
                                    <tr>
                                        <td>Nomor KK</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_program_bantuan[0]['no_kk']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Nama</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_program_bantuan[0]['nama']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_program_bantuan[0]['jenis_kelamin']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Domisili</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_program_bantuan[0]['domisili']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Penghasilan</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_program_bantuan[0]['penghasilan']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Status</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_program_bantuan[0]['status']; ?></td>            
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