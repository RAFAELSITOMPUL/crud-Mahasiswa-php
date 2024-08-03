<div class = "container">
<h1>Tambah Data</h1>
<form action="<?=BASEURL?>/Mahasiswa/tambah" method ="post">
  <div class="row">
     <div class = "col-6">
  <div class="form-group">
    <label>Nama Mahasiswa:</label>
    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama">
  </div>
  <div class="form-groub">
  <label>Nim:</label>
    <input type="text" class="form-control" placeholder="Nim" name="nim">
  </div>
  <div class="form-groub">
  <label>Jurusan:</label>
    <select class="form-control" name="jurusan">
      <option value="">--Pilih jurusan--</option>
      <option value="Komputer">Komputer</option>
      <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
      <option value="Fisipol">Fisipol</option>
    </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
     </div>
  </div>
</form>
</div>