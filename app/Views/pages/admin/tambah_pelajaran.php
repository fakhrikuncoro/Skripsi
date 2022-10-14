<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row justify-content-center m-5">
        <div class="col-7 m-10 ">
        <div class="card p-3">
      <form action="<?= base_url('TambahPelajaran/save'); ?>" method="POST">
        <div class="mb-3">
          <label for="mapel" class="form-label">Mata Pelajaran</label>
          <input type="text" class="form-control" id="mapel" name="mapel">
        </div>
        <div class="mb-3">
          <label for="dosen" class="form-label">Nama Dosen</label>
          <input type="text" class="form-control" id="dosen" name="dosen">
        </div>
        <div class="mb-3">
          <h5>hari </br>
            <select name='hari'>
              <option value='senin' selected='selected'>senin</option>
              <option value='selasa'>selasa</option>
              <option value='rabu'>rabu</option>
              <option value='kamis'>kamis</option>
              <option value='jumat'>jumat</option>
              <option value='sabtu'>sabtu</option>
            </select>
        </div>

        <div class="mb-3">
          <h5>jam </br>
            <select name='jam'>
              <option value='08.00' selected='selected'>08.00</option>
              <option value='10.00'>10.00</option>
              <option value='01.00'>01.00</option>
              <option value='04.00'>04.00</option>
            </select>
        </div>
        <div class="mb-3">
          <h5>ruangan</br>
            <select name='ruangan'>
              <option value='B1 101' selected='selected'>B1 101</option>
              <option value='B1 102'>B1 102</option>
              <option value='B1 103'>B1 103</option>
              <option value='B1 104'>B1 104</option>
            </select>
        </div>
        <div class="mb-3">
          <h5>Kelas</br>
            <select name='kelas'>
              <option value='SI-01' selected='selected'>SI-01</option>
              <option value='SI-02'>SI-02</option>
            </select>
        </div>
        <div class="mb-3">
          <h5>Jenis </br>
            <select name='jenis'>
              <option value='teori' selected='selected'>Teori</option>
              <option value='praktikum'>Praktikum</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
  </div>
</div>
      <br />
      <br />
    <form action="" method="post.3">
    <div class = "row">
      <div class="col-4">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="masukan data" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
  <button class="btn btn-outline-secondary" type="submit" name="submit">cari</button>
</div>

</div>
    </div>
    </form>

      <table class="table">
        <thead>
          <tr>
            <th class="table-success" scope="col">Mata Pelajaran</th>
            <th class="table-success" scope="col">Hari</th>
            <th class="table-success" scope="col">Kelas</th>
            <th class="table-success" scope="col">Jam</th>
            <th class="table-success" scope="col">jenis</th>
            <th class="table-success" scope="col">ruangan</th>
            <th class="table-success" scope="col">Dosen</th>
            <th class="table-success" scope="col">Delete</th>
          </tr>
        </thead>
        <tbody >
          <?php foreach ($pelajaran as $j) : ?>
            <tr>
              </td>
              <td><?= $j['mapel']; ?></td>
              <td><?= $j['hari']; ?></td>
              <td><?= $j['kelas']; ?></td>
              <td><?= $j['jam']; ?></td>
              <td><?= $j['jenis']; ?></td>
              <td><?= $j['ruangan']; ?></td>
              <td><?= $j['dosen']; ?></td>
              <td>
			        <a href="/tambahpelajaran/delete/<?= $j['id_pelajaran']; ?>"class="btn tombol-hapus">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
          </table>
          <?= $pager->links('tambah_pelajaran', 'pagination') ?>
        </tbody>
<?= $this->endsection(); ?>