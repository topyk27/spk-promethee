<div class="form-group">
	<div class="col-lg-3">
		<label>Nama</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="nama" placeholder="Nama" required="" value="<?php if(isset($data_pengguna)) echo $data_pengguna[0]['nama']; ?>" >
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
		<label>Username</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="username" placeholder="Username" required="" value="<?php if(isset($data_pengguna)) echo $data_pengguna[0]['username']; ?>">
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
		<label>Password</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="password" name="password" placeholder="Password" required="" >
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
		<label>Level</label>
	</div>
	<div class="col-lg-9">
		<select name="level" class="form-control">
			<option value="Admin" <?php if(isset($data_pengguna) && $data_pengguna[0]['level']=='Admin') echo "selected"; ?> >Admin</option>
			<option value="Petugas" <?php if(isset($data_pengguna) && $data_pengguna[0]['level']=='Petugas') echo "selected"; ?>>Petugas</option>
		</select>
	</div>
</div>
