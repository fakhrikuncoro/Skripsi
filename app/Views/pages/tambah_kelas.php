<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-7 m-10 ">
        <div class="card p-3">
        <form action="<?= base_url('TambahKelas/save');?>" method="POST" >
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" height="50" width="50" >
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <input type="text" class="form-control" id="angkatan" name="angkatan" height="50" width="50">
          </div>
          <div class="mb-3">
            <label for="pembimbing" class="form-label">Pembimbing</label>
            <input type="text" class="form-control" id="pembimbing" name="pembimbing" height="100%" width="50%">
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" height="100%" width="50%">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</br>
</br>
<form action="" method="post.3">
    <div class = "row">
      <div class="col 10"></div>
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="masukan data" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
  <button class="btn btn-outline-secondary" type="submit" name="submit">cari</button>
</div>
<table class="table">
        <thead>
          <tr>
            <th class="table-success" scope="col">jurusan</th>
            <th class="table-success" scope="col">angkatan</th>
            <th class="table-success" scope="col">pembimbing</th>
            <th class="table-success" scope="col">kelas</th>
            <th class="table-success" scope="col">Delete</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach( $kelas as $j) : ?>
            <tr>
              </td>
              <td><?= $j ['jurusan']; ?></td>
              <td><?= $j ['angkatan']; ?></td>
              <td><?= $j ['pembimbing']; ?></td>
              <td><?= $j ['kelas']; ?></td>
              <td>
			        <a href="/tambahkelas/delete/<?= $j['id_kelas']; ?>"class="btn tombol-hapus">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
            </table>
            <?= $pager->links('tambah_kelas', 'pagination') ?>
          </tbody>
</div>
<?= $this->endsection(); ?>