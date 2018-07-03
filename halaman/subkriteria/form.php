<div class="row form-group">
	<div class="col-lg-3">
		<label>Nama</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="text" name="nama" placeholder="Nama" required="" value="<?php if(isset($data_subkriteria)) echo $data_subkriteria[0]['nama_subkriteria']; ?>">
	</div>
</div>

<div class="row form-group">
	<div class="col-lg-3">
		<label>Bobot</label>
	</div>
	<div class="col-lg-9">
		<input class="form-control" type="number" name="bobot" placeholder="Bobot" required="" value="<?php if(isset($data_subkriteria)) echo $data_subkriteria[0]['bobot_subkriteria']; ?>">
	</div>
</div>
