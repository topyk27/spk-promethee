        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pengaturan</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php if(isset($_SESSION['pesan'])): ?>
                            <div class="alert alert-<?php echo $_SESSION['warna']; ?> ">
                                <?php echo $_SESSION['pesan']; unset($_SESSION['pesan']) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row">
                	<div class="col-lg-12">
                		<div class="panel panel-primary">
                			<div class="panel-heading">
                				Form Pengguna
                			</div>
                			<div class="panel-body">
                				<form action="config/pengguna/proses_ubah_profile.php" method="post">

                                    <div class="form-group">
                                        <div class="col-lg-3">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="nama" placeholder="Nama" value="<?php if(isset($data_pengguna)) echo $data_pengguna[0]['nama']; ?>" >
                                        </div>
                                    </div>
                					<div class="form-group">
                                        <div class="col-lg-3">
                                            <label>Level</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="level" placeholder="Level" value="<?php if(isset($data_pengguna)) echo $data_pengguna[0]['level']; ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-3">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="username" placeholder="Username" value="<?php if(isset($data_pengguna)) echo $data_pengguna[0]['username']; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-3">
                                            <label>Password Lama</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" name="password_lama" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-3">
                                            <label>Password Baru</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" name="password_baru" placeholder="Password">
                                        </div>
                                    </div>
                					<div class="form-group">
										<div class="col-lg-12">
											<button type="submit" class="btn btn-md btn-primary"><i class="fa fa-save"></i> Simpan</button>
											<button type="reset" class="btn btn-md btn-warning"><i class="fa fa-undo"></i> Ulangi</button>
										</div>
									</div>

                				</form>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->