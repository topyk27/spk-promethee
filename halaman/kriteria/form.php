
<div class="row form-group">
	<div class="col-lg-3">
		<label>Nama</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="nama" placeholder="Nama" required="" value="<?php if(isset($data_kriteria)) echo $data_kriteria[0]['nama']; ?>">
	</div>
</div>

<div class="row form-group">
	<div class="col-lg-3">
		<label>Bobot</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="number" name="bobot" placeholder="Bobot" required="" value="<?php if(isset($data_kriteria)) echo $data_kriteria[0]['bobot']; ?>">
	</div>
</div>
<div class="row form-group">
	<div class="col-lg-3">
		<label>Jenis</label>
	</div>
	<div class="col-lg-9">
		<select class="form-control" name="jenis">
			<option value="">- Jenis -</option>
			<option value="Benefit" <?php if(isset($data_kriteria[0]) && $data_kriteria[0]['jenis']=='Benefit') echo "selected"; ?>>Benefit</option>
			<option value="Cost" <?php if(isset($data_kriteria[0]) && $data_kriteria[0]['jenis']=='Cost') echo "selected"; ?>>Cost</option>
		</select>
	</div>
</div>

