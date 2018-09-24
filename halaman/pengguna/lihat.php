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
                				Informasi Petugas
                			</div>
                			<div class="panel-body">
                				<table class="table">
                                    <tr>
                                        <td>Nama</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_pengguna[0]['nama']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Username</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_pengguna[0]['username']; ?></td>            
                                    </tr>
                                    <tr>
                                        <td>Level</td>            
                                        <td>:</td>            
                                        <td><?php echo $data_pengguna[0]['level']; ?></td>            
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