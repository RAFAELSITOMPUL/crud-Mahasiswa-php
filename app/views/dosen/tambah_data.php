<div class = "container">
<h1>Tambah Data Dosen</h1>
<form action="<?=BASEURL?>/Dosen/tambah" method ="post">
  <div class="row">
     <div class = "col-6">
  <div class="form-group">
    <label>Nama Dosen:</label>
    <input type="text" class="form-control" placeholder="Nama Dosen" name="nama">
  </div>
  <div class="form-groub">
  <label>Nip:</label>
    <input type="text" class="form-control" placeholder="Nim" name="nip">
  </div>
  <div class="form-groub">
  <label>Tanggal Lahir:</label>
    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
  </div>
  <div class="form-groub">
  <label>Alamat:</label>
    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
  </div>

  <div class="form-groub">
  <label>Nomor Telepon:</label>
    <input type="text" class="form-control" placeholder="No Telepon" name="no_telpon">
  </div>

  <div class="form-groub">
  <label>Email:</label>
    <input type="text" class="form-control" placeholder="Email" name="email">
  </div>

  <div class="form-groub">
  <label>Jabatan :</label>
    <input type="text" class="form-control" placeholder="jabatan" name="jabatan">
  </div>

  <div class="form-groub">
  <label>Departement :</label>
    <input type="text" class="form-control" placeholder="Departement" name="departement_id">
  </div>
  
  <br>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
     </div>
  </div>
</form>
</div>