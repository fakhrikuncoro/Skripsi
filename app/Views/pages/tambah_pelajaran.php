<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <form action="<?= base_url('TambahPelajaran/save'); ?>" method="POST">
        <div class="mb-3">
          <label for="mapel" class="form-label">Mata Pelajaran</label>
          <input type="text" class="form-control" id="mapel" name="mapel">
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
          <h5>Kelas</br>
            <select name='kelas'>
              <option value='B1 101' selected='selected'>B1 101</option>
              <option value='B1 102'>B1 102</option>
              <option value='B1 103'>B1 103</option>
              <option value='B1 104'>B1 104</option>
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

      <br />
      <br />
      <table class="table">
        <thead>
          <tr>
            <th class="table-success" scope="col">Mata Pelajaran</th>
            <th class="table-success" scope="col">Hari</th>
            <th class="table-success" scope="col">Kelas</th>
            <th class="table-success" scope="col">Jam</th>
            <th class="table-success" scope="col">jenis</th>
            <th class="table-success" scope="col">Dosen</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pelajaran as $j) : ?>
            <tr>
              </td>
              <td><?= $j['mapel']; ?></td>
              <td><?= $j['hari']; ?></td>
              <td><?= $j['kelas']; ?></td>
              <td><?= $j['jam']; ?></td>
              <td><?= $j['jenis']; ?></td>
              <td><?= $j['nama_dosen']; ?></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endsection(); ?>