<div class="form-group">
	<div class="col-lg-3">
		<label>Nomor KK</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="no_kk" placeholder="No KK" required="" value="<?php if(isset($data_program_bantuan)) echo $data_program_bantuan[0]['no_kk']; ?>" >
	</div>
</div>
<div class="form-group">
	<div class="col-lg-3">
		<label>Nama</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="nama" placeholder="Nama" required="" value="<?php if(isset($data_program_bantuan)) echo $data_program_bantuan[0]['nama']; ?>">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-3">
		<label>Jenis Kelamin</label>
	</div>
	<div class="col-lg-9">
		<input type="radio" name="jenis_kelamin" value="Laki - Laki" <?php if(isset($data_program_bantuan) && $data_program_bantuan[0]['jenis_kelamin']=='Laki - Laki') echo 'checked';  ?>> Laki - Laki
		<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if(isset($data_program_bantuan) && $data_program_bantuan[0]['jenis_kelamin']=='Perempuan') echo 'checked';  ?>> Perempuan
	</div>
</div>
<div class="row"></div>
<div class="form-group">
	<div class="col-lg-3">
		<label>Umur</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="umur" placeholder="Umur" required="" value="<?php if(isset($data_program_bantuan)) echo $data_program_bantuan[0]['umur']; ?>">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-3">
		<label>Domisili</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="domisili" placeholder="Domisili" required="" value="<?php if(isset($data_program_bantuan)) echo $data_program_bantuan[0]['domisili']; ?>">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-3">
		<label>Penghasilan</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="number" min=0 name="penghasilan" placeholder="Penghasilan" required="" value="<?php if(isset($data_program_bantuan)) echo $data_program_bantuan[0]['penghasilan']; ?>">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-3">
		<label>Status</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="status" placeholder="Status" required="" value="<?php if(isset($data_program_bantuan)) echo $data_program_bantuan[0]['status']; ?>">
	</div>
</div>
