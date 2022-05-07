<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
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
<br/>
<br/>
<table class="table">
        <thead>
          <tr>
            <th class="table-success" scope="col">Nama Dosen</th>
            <th class="table-success" scope="col">Kontak</th>
            <th class="table-success" scope="col">Email</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach( $dosen as $j) : ?>
            <tr>
              </td>
              <td><?= $j ['nama_dosen']; ?></td>
              <td><?= $j ['kontak']; ?></td>
              <td><?= $j ['email']; ?></td>
            </tr>
            <?php endforeach; ?>
            </table>
            <?= $pager->links() ?>
          </tbody>
      
        </div>
    </div>
</div>
<?= $this->endsection(); ?>