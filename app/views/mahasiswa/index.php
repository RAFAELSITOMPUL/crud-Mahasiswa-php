<style>
   .my-table thead td{
      vertical-align: middle;
      text-align: center;
   }
</style>
<div class="container">
<a href="<?= BASEURL?>/Mahasiswa/formtambah" class="btn btn-dark mb-3">Tambah Data +</a>
  <table class="table table-bordered my-table">
    <thead>
      <tr>
        <td rowspan="2" width ="5%">No. </td>
        <td rowspan="2">Nama Mahasiswa</td>
        <td rowspan="2">Nim</td>
        <td rowspan="2">Jurusan</td>
        <td colspan="2" width = "10%">Opsi</td>
      </tr>
      <tr>
        <td>Ubah</td>
        <td>Hapus</td>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no=0; 
       foreach ($data['mahasiswa'] as $mahasiswa):
       $no++;?>
      <tr>
        <td> <?= $no; ?></td>
        <td> <?= $mahasiswa['nama']; ?></td>
        <td> <?= $mahasiswa['nim']; ?></td>
        <td> <?= $mahasiswa['jurusan']; ?></td>
        <td class="text-center"><a href="<?= BASEURL?>Mahasiswa/formubah/<?=$mahasiswa['id'];?>"><i class="fa fa-edit" style= "color:blue;"></i></a></td>
        
        <td class="text-center"><a href="<?= BASEURL?>Mahasiswa/delete/<?=$mahasiswa['id'];?>"> <i class="fa fa-trash"style= "color:red;"></i></td>
      </tr>
        <?php endforeach;?>
      <tbody>
  </table>
</div>