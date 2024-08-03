<style>
   .my-table thead td{
      vertical-align: middle;
      text-align: center;
   }
</style>
<div class="container">
<a href="<?= BASEURL?>/Dosen/formtambah" class="btn btn-dark mb-3">Tambah Data +</a>
  <table class="table table-bordered my-table">
    <thead>
      <tr>
        <td rowspan="2" width ="5%">No. </td>
        <td rowspan="2">Nama Dosen</td>
        <td rowspan="2">Nip</td>
        <td rowspan="2">Tanggal Lahir</td>
        <td rowspan="2">Alamat</td>
        <td rowspan="2">Nomor Telepon</td>
        <td rowspan="2">Email</td>
        <td rowspan="2">Jabatan</td>
        <td rowspan="2">Departemen</td>
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
       foreach ($data['dosen'] as $dosen):
       $no++;?>
      <tr>
        <td> <?= $no; ?></td>
        <td> <?= $dosen['nama']; ?></td>
        <td> <?= $dosen['nip']; ?></td>
        <td> <?= $dosen['tanggal_lahir']; ?></td>
        <td> <?= $dosen['alamat']; ?></td>
        <td> <?= $dosen['no_telpon']; ?></td>
        <td> <?= $dosen['email']; ?></td>
        <td> <?= $dosen['jabatan']; ?></td>
        <td> <?= $dosen['departement_id']; ?></td>
        <td class="text-center"><a href="<?= BASEURL?>Mahasiswa/formubah/<?=$mahasiswa['id'];?>"><i class="fa fa-edit" style= "color:blue;"></i></a></td>
        
        <td class="text-center"><a href="<?= BASEURL?>Mahasiswa/delete/<?=$mahasiswa['id'];?>"> <i class="fa fa-trash"style= "color:red;"></i></td>
      </tr>
        <?php endforeach;?>
      <tbody>
  </table>
</div>