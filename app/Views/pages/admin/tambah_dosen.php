<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-7 m-10 ">
        <div class="card p-3">
        <form action="<?= base_url('TambahDosen/save');?>" method="POST" >
          <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">
          </div>
          <div class="mb-3">
            <label for="kontak" class="form-label">Kontak</label>
            <input type="text" class="form-control" id="kontak" name="kontak">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      <br/>
    </div>

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
            <th class="table-success" scope="col">Nama Dosen</th>
            <th class="table-success" scope="col">Kontak</th>
            <th class="table-success" scope="col">Email</th>
            <th class="table-success" scope="col">Delete</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach( $dosen as $j) : ?>
            <tr>
              </td>
              <td><?= $j ['nama_dosen']; ?></td>
              <td><?= $j ['kontak']; ?></td>
              <td><?= $j ['email']; ?></td>
              <td>
			        <a href="/tambahdosen/delete/<?= $j['id_dosen']; ?>"class="btn tombol-hapus">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
            </table>
            <?= $pager->links('tambah_dosen', 'pagination') ?>
          </tbody>
      
        
</div>
<?= $this->endsection(); ?>