
<div class = "container">
<h1>Ubah Data</h1>
<form action="<?=BASEURL?>/Mahasiswa/prosesubah" method ="post">
<?php foreach ($data['ubahdata'] as $ubah): ?>
  <input type = "hidden" value="<?= $ubah['id']?>" name="id">
  <div class="row">
     <div class = "col-6">
  <div class="form-group">
    <label>Nama Mahasiswa:</label>
    <input type="text" class="form-control" value="<?= $ubah['nama']?>" name="nama">
  </div>
  <div class="form-groub">
  <label>Nim:</label>
    <input type="text" class="form-control" value="<?= $ubah['nim']?>" name="nim">
  </div>
  <div class="form-groub">
  <label>Jurusan:</label>
    <select class="form-control" name="jurusan">
      <option value="<?= $ubah['jurusan']?>"><?= $ubah ['jurusan']?></option>
      <option value="Komputer">Komputer</option>
      <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
      <option value="Fisipol">Fisipol</option>
    </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">UBAH DATA</button>
     </div>
  </div>
  <?php endforeach;?>
</form>
</div>