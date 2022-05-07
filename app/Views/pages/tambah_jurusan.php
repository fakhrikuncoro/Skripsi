<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
        <form action="<?= base_url('TambahJurusan/save');?>" method="POST" >
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
</div>
<?= $this->endsection(); ?>