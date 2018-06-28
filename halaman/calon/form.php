<div class="row form-group">
	<div class="col-lg-3">
		<label>Nomor KK</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="no_kk" placeholder="No KK" required="" value="<?php if(isset($data_calon)) echo $data_calon[0]['no_kk']; ?>" >
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Nama</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="nama" placeholder="Nama" required="" value="<?php if(isset($data_calon)) echo $data_calon[0]['nama']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Jenis Kelamin</label>
	</div>
	<div class="col-lg-9">
		<input type="radio" name="jenis_kelamin" value="Laki - Laki" <?php if(isset($data_calon) && $data_calon[0]['jenis_kelamin']=='Laki - Laki') echo 'checked';  ?>> Laki - Laki
		<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if(isset($data_calon) && $data_calon[0]['jenis_kelamin']=='Perempuan') echo 'checked';  ?>> Perempuan
	</div>
</div>
<div class="row"></div>

<div class="row form-group">
	<div class="col-lg-3">
		<label>Kecamatan</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan" required="" value="<?php if(isset($data_calon)) echo $data_calon[0]['kecamatan']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Usia</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="number" name="usia" placeholder="Usia" required="" value="<?php if(isset($data_calon)) echo $data_calon[0]['usia']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Status Perkawinan</label>
	</div>
	<div class="col-lg-9">
		<select class="form-control" name="status_perkawinan">
			<option value="Belum Kawin" <?php if(isset($data_calon[0]) && $data_calon[0]['status_perkawinan']=='Belum Kawin') echo "selected"; ?>>Belum Kawin</option>
			<option value="Cerai mati" <?php if(isset($data_calon[0]) && $data_calon[0]['status_perkawinan']=='Cerai mati') echo "selected"; ?>>Cerai mati</option>
			<option value="Cerai hidup" <?php if(isset($data_calon[0]) && $data_calon[0]['status_perkawinan']=='Cerai hidup') echo "selected"; ?>>Cerai hidup</option>
			<option value="Kawin" <?php if(isset($data_calon[0]) && $data_calon[0]['status_perkawinan']=='Kawin') echo "selected"; ?>>Kawin</option>
		</select>
	</div>
</div>

<div class="row form-group">
	<div class="col-lg-3">
		<label>Pendidikan</label>
	</div>
	<div class="col-lg-9">
		<select class="form-control" name="pendidikan">
			<option value="Belum/Tidak Tamat SD/Sederajat" <?php if (isset($data_calon)&&$data_calon[0]['pendidikan'] == 'Belum/Tidak Tamat SD/Sederajat') echo "selected"; ?>>Belum/Tidak Tamat SD/Sederajat</option>
			<option value="SD/MI/Sederajat" <?php if (isset($data_calon) && $data_calon[0]['pendidikan'] == 'SD/MI/Sederajat') echo "selected"; ?>>SD/MI/Sederajat</option>
			<option value="SLTP/MTs/Sederajat" <?php if (isset($data_calon) && $data_calon[0]['pendidikan'] == 'SLTP/MTs/Sederajat') echo "selected"; ?>>SLTP/MTs/Sederajat</option>
			<option value="SLTA/MA/Sederajat" <?php if (isset($data_calon) && $data_calon[0]['pendidikan'] == 'SLTA/MA/Sederajat') echo "selected"; ?>>SLTA/MA/Sederajat</option>
			<option value="Diploma/S1/S2/S3" <?php if (isset($data_calon) && $data_calon[0]['pendidikan'] == 'Diploma/S1/S2/S3') echo "selected"; ?>>Diploma/S1/S2/S3</option>
		</select>
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Jenis Kecacatan</label>
	</div>
	<div class="col-lg-9">
		<select class="form-control" name="jenis_kecacatan">
			<option value="Cacat Fisik" <?php if(isset($data_calon)&&$data_calon[0]['jenis_kecacatan']=='Cacat Fisik') echo "selected"; ?>>Cacat Fisik</option>
			<option value="Cacat Mental" <?php if(isset($data_calon)&&$data_calon[0]['jenis_kecacatan']=='Cacat Mental') echo "selected"; ?>>Cacat Mental</option>
			<option value="Cacat Fisik dan Cacat Mental" <?php if(isset($data_calon)&&$data_calon[0]['jenis_kecacatan']=='Cacat Fisik dan Cacat Mental') echo "selected"; ?>>Cacat Fisik dan Cacat Mental</option>
		</select>
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Penyebab Kecacatan</label>
	</div>
	<div class="col-lg-9">
		<select class="form-control" name="penyebab_kecacatan">
			<option value="Sakit" <?php if(isset($data_calon)&&$data_calon[0]['penyebab_kecacatan']=='Sakit') echo "selected"; ?>>Sakit</option>
			<option value="Umur" <?php if(isset($data_calon)&&$data_calon[0]['penyebab_kecacatan']=='Umur') echo "selected"; ?>>Umur</option>
			<option value="Kecelakaan" <?php if(isset($data_calon)&&$data_calon[0]['penyebab_kecacatan']=='Kecelakaan') echo "selected"; ?>>Kecelakaan</option>
			<option value="Depresi" <?php if(isset($data_calon)&&$data_calon[0]['penyebab_kecacatan']=='Depresi') echo "selected"; ?>>Depresi</option>
			<option value="Sejak Lahir" <?php if(isset($data_calon)&&$data_calon[0]['penyebab_kecacatan']=='Sejak Lahir') echo "selected"; ?>>Sejak Lahir</option>
		</select>
	</div>
</div>
